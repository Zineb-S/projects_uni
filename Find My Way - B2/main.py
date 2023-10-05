import stanza
import MySQLdb
from flask import *
import json ,time

app = Flask(__name__)



@app.route('/',methods=['GET'])
def home_page():
    user_query = str(request.args.get('id'))
    set={'Page':'Home','Message':'Successfully loaded' , 'Timestamp' : time.time()}
    stanza.download('en')

    nlp = stanza.Pipeline(lang='en', processors='tokenize,sentiment')

    db = MySQLdb.connect("localhost", "root", "", "myway")

    Executesp = db.cursor()
    Executesp.callproc('StudentGrades', user_query)
    results = Executesp.fetchall()
    p = 0
    neutral = 0
    n = 0

    for x in results:
        print(x[-1])
        if x[-1] != None:
            for i, sentence in enumerate(nlp(x[-1]).sentences):
                if sentence.sentiment == 1:
                    neutral += 1
                if sentence.sentiment == 0:
                    n += 1
                if sentence.sentiment == 2:
                    p += 1
    if n > p:
        json_dump = json.dumps(0)
    if p > n:
        json_dump = json.dumps(2)
    else:
        json_dump = json.dumps(1)
    return json_dump


if __name__ == '__main__':
    app.run(port=7777)


#
# This downloads the English models for the neural pipeline

