package com.bex.booking.controller;

import com.bex.booking.model.Resident;
import com.bex.booking.service.ResidentService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController

@RequestMapping("/api/residents")
public class ResidentController {
    @Autowired
    private ResidentService residentService;
    @CrossOrigin(origins = "*")
    @GetMapping
    public ResponseEntity<List<Resident>> getAllResidents(){
        return new ResponseEntity<List<Resident>>(residentService.allResidents(), HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @GetMapping("/{id}")
    public ResponseEntity<Optional<Resident>> getSingleResident(@PathVariable Integer id){
        return new ResponseEntity<Optional<Resident>>(residentService.singleResident(id),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @PostMapping
    public ResponseEntity<Resident> createResident(@RequestBody Resident resident){
        return new ResponseEntity<Resident>(residentService.createResident(resident.getIndex(),resident.getFirst_name(),resident.getLast_name(),resident.getEmail(),resident.getPassword(),resident.getPhone(),resident.getRes_total(),resident.getUnit_id()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @PutMapping
    public ResponseEntity<String> updateResident(@RequestBody Resident resident){
        return new ResponseEntity<String>(residentService.updateResident(resident.getIndex(),resident.getFirst_name(),resident.getLast_name(),resident.getEmail(),resident.getPassword(),resident.getPhone(),resident.getRes_total(),resident.getUnit_id()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @DeleteMapping("/{id}")
    public ResponseEntity<Optional<Resident>> deleteResident(@PathVariable Integer id){
        return new ResponseEntity<Optional<Resident>>(residentService.deleteResident(id),HttpStatus.OK);
    }
}
