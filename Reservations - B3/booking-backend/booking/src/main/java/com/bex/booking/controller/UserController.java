package com.bex.booking.controller;

import com.bex.booking.model.User;
import com.bex.booking.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@CrossOrigin(origins = "*")
@RequestMapping("/api/users")
public class UserController {
    @Autowired
    private UserService userService;

    @GetMapping
    public ResponseEntity<List<User>> getAllUsers(){
        return  new ResponseEntity<List<User>>(userService.allUsers(),HttpStatus.OK);
    }

    @GetMapping("/{id}")
    public ResponseEntity<Optional<User>> getSingleUser(@PathVariable Integer id){
        return new ResponseEntity<Optional<User>>(userService.singleUser(id),HttpStatus.OK);
    }

    @GetMapping("/getnext")
    public int getNextAvailableIndex() {
        return userService.getNextAvailableIndex();
    }

    @PostMapping
    public ResponseEntity<User> createUser(@RequestBody User user){
        return new ResponseEntity<User>(userService.createUser(user.getIndex(), user.getUsername(), user.getFirst_name(),user.getLast_name(),user.getEmail(),user.getPassword(),user.getPhone(),user.getRes_total()),HttpStatus.OK);
    }

    @PutMapping
    public ResponseEntity<String> updateUser(@RequestBody User user){
        return new ResponseEntity<String>(userService.updateUser(user.getIndex(),user.getFirst_name(),user.getLast_name(),user.getEmail(),user.getPassword(),user.getPhone(),user.getRes_total()),HttpStatus.OK);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Optional<User>> deleteUser(@PathVariable Integer id){
        return new ResponseEntity<Optional<User>>(userService.deleteUser(id),HttpStatus.OK);
    }
}

