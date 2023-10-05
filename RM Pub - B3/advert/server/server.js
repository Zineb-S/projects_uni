
import express, { json } from 'express';
import cors from 'cors';
import multer from 'multer';
import path from 'path';
import fs from 'fs';
import { Storage } from "@google-cloud/storage";
const app = express();
import { format } from 'util';
import { v4 as uuidv4 } from 'uuid';
import textToSpeech from '@google-cloud/text-to-speech';
import dotenv from 'dotenv';
import { promisify } from 'util';
import { fileURLToPath } from 'url';
import { dirname } from 'path';

dotenv.config();
app.use(cors());
app.use(json());

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

app.use(express.static(__dirname));
app.use('/transcripts', express.static(path.join(__dirname, 'transcripts')));

const cloudStorage = new Storage({
  keyFilename: `C:/Users/user/Desktop/radiomars-389217-8eb98862b427.json`,
  projectId: "radiomars-389217",
});
const bucketName = "usersaudios";
const bucket = cloudStorage.bucket(bucketName);
const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, 'recordings');
  },
  filename: function (req, file, cb) {
    const uniqueName = uuidv4();
    cb(null, new Date().toISOString().replace(/:/g, "-") + '-' + uniqueName + path.extname(file.originalname));
  }
});

const upload = multer({ storage: storage });

const client = new textToSpeech.TextToSpeechClient();
const urlStorePath = path.join(__dirname, 'urlStore.json');

app.post('/audio-upload', upload.single('audio'), (req, res, next) => {
  if (!req.file) {
    res.status(400).send("No file uploaded.");
    return;
  }

  // Create a new blob in the bucket and upload the file data.
  const blob = bucket.file(req.file.filename);
  
  const blobStream = blob.createWriteStream({
    metadata: {
      contentType: req.file.mimetype,
    },
  });

  blobStream.on('error', (err) => {
    next(err);
  });

  blobStream.on('finish', async () => {
    await blob.makePublic();
    // The public URL can be used to directly access the file via HTTP.
    const publicUrl = format(
      `https://storage.googleapis.com/${bucket.name}/${blob.name}`
    );

    // Save the URL to urlStore.json
    let urlStore = [];
    if (fs.existsSync(urlStorePath)) {
      urlStore = JSON.parse(fs.readFileSync(urlStorePath, 'utf8'));
    }
    urlStore.push({ url: publicUrl, timestamp: Date.now() });
    fs.writeFileSync(urlStorePath, JSON.stringify(urlStore));

    res.status(200).send(publicUrl);
  });

  fs.createReadStream(req.file.path).pipe(blobStream);
});

app.get('/latest-audio', (req, res) => {
  if (fs.existsSync(urlStorePath)) {
    const urlStore = JSON.parse(fs.readFileSync(urlStorePath, 'utf8'));
    if (urlStore.length > 0) { // check if there are elements in the array
      const latestAudio = urlStore.reduce((a, b) => (a.timestamp > b.timestamp ? a : b));
      res.status(200).send(latestAudio.url);
    } else {
      res.status(404).send('No audio files found');
    }
  } else {
    res.status(404).send('No audio files found');
  }
});




async function convertMp3(text, languageCode, ssmlGender, name) { // add the additional parameters here
  const request = {
    input: { text: text },
    voice: { languageCode: languageCode, ssmlGender: ssmlGender, name: name }, 
    audioConfig: { audioEncoding: 'MP3' },
  };

  const [response] = await client.synthesizeSpeech(request);
  const writeFile = promisify(fs.writeFile)

  // Create 'transcripts' directory if it doesn't exist
  fs.mkdirSync(path.join(__dirname, 'transcripts'), { recursive: true });

  // Use a timestamp for the filename
  let timestamp = Date.now();
  let filePath = `transcripts/output-${timestamp}.mp3`;

  await writeFile(path.join(__dirname, filePath), response.audioContent, 'binary')

  return filePath; // make sure to return filePath from your function
}
app.post('/convert-text', async (req, res) => {
  try {
    const text = req.body.text;
    const languageCode = req.body.languageCode;
    const ssmlGender = "req.body.ssmlGender";
    const name = req.body.name;
    // Assuming convertMp3 is a function that takes a text and converts it to an MP3 file
    const filePath = await convertMp3(text, languageCode, ssmlGender, name); // pass the additional parameters here

    res.status(200).json({ filePath });
  } catch (error) {
    console.error(error);
    res.status(500).json({ message: 'Failed to convert text' });
  }
});

app.get('/get-files', (req, res) => {
  fs.readdir(path.join(__dirname, 'transcripts'), (err, files) => {
    if (err) {
      console.error(err);
      res.status(500).json({ message: 'Failed to get files' });
    } else {
      // sort files by timestamp in the name
      files.sort((a, b) => {
        const timestampA = Number(a.split('-')[1].split('.')[0]);
        const timestampB = Number(b.split('-')[1].split('.')[0]);
        return timestampA - timestampB;
      });

      res.status(200).json({ files });
    }
  });
});

const port = process.env.PORT || 5000;

app.listen(port, () => {
  console.log(`Server is running on port: ${port}`);
});


