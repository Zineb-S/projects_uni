package com.bex.booking.controller;

import com.bex.booking.model.Field;
import com.bex.booking.service.FieldService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController

@RequestMapping("/api/fields")
public class FieldController {
    @Autowired
    private FieldService fieldService;
    @CrossOrigin(origins = "*")
    @GetMapping
    public ResponseEntity<List<Field>> getAllFields(){
        return new ResponseEntity<List<Field>>(fieldService.allFields(), HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @GetMapping("/{id}")
    public ResponseEntity<Optional<Field>> getSingleField(@PathVariable Integer id){
        return new ResponseEntity<Optional<Field>>(fieldService.singleField(id),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @PostMapping
    public ResponseEntity<Field> createField(@RequestBody Field field){
        return new ResponseEntity<Field>(fieldService.createField(field.getIndex(),field.getType(), field.getFee()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @PutMapping
    public ResponseEntity<String> updateField(@RequestBody Field field){
        return new ResponseEntity<String>(fieldService.updateField(field.getIndex(),field.getType(), field.getFee()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @DeleteMapping("/{index}")
    public ResponseEntity<Optional<Field>> deleteField(@PathVariable Integer index){
        System.out.println("Received delete request for field with id: " + index);
        return new ResponseEntity<Optional<Field>>(fieldService.deleteField(index),HttpStatus.OK);
    }
}
