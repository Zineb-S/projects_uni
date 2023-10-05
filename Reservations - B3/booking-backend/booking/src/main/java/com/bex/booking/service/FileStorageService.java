package com.bex.booking.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.mongodb.gridfs.GridFsTemplate;
import org.springframework.stereotype.Service;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;

// FileStorageService.java
@Service
public class FileStorageService {

    @Autowired
    private GridFsTemplate gridFsTemplate;

    public String storeFile(MultipartFile file) {
        String fileId = null;
        try {
            fileId = gridFsTemplate.store(file.getInputStream(), file.getOriginalFilename(), file.getContentType()).toString();
        } catch (IOException e) {
            throw new RuntimeException("Could not store file " + file.getOriginalFilename() + ". Please try again!", e);
        }
        return fileId;
    }
}
