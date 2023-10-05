package com.bex.booking.controller;

import com.bex.booking.model.Reservation;
import com.bex.booking.service.ReservationService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@CrossOrigin(origins = "*")
@RequestMapping("/api/reservations")
public class ReservationController {
    @Autowired
    private ReservationService reservationService;
    @CrossOrigin(origins = "*")
    @GetMapping
    public ResponseEntity<List<Reservation>> getAllReservations(){
        return new ResponseEntity<List<Reservation>>(reservationService.allReservations(), HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @GetMapping("/{id}")
    public ResponseEntity<Optional<Reservation>> getSingleReservation(@PathVariable Integer id){
        return new ResponseEntity<Optional<Reservation>>(reservationService.singleReservation(id),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @GetMapping("/byreservee/{id}")
    public ResponseEntity<List<Reservation>> getReservationsByReserveeId(@PathVariable("id") Integer reservee_id){
        List<Reservation> reservations = reservationService.reservationsByReserveeId(reservee_id);
        return new ResponseEntity<>(reservations, HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @GetMapping("/getnext")
    public int getNextAvailableIndex() {
        return reservationService.getNextAvailableIndex();
    }
    @CrossOrigin(origins = "*")
    @PostMapping
    public ResponseEntity<Reservation> createReservation(@RequestBody Reservation reservation){
        return new ResponseEntity<Reservation>(reservationService.createReservation(reservation.getIndex(),reservation.getDate(),reservation.getDuration(),reservation.getField_id(),reservation.getReservee_id(),reservation.getRole()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @PutMapping
    public ResponseEntity<String> updateReservation(@RequestBody Reservation reservation){
        return new ResponseEntity<String>(reservationService.updateReservation(reservation.getIndex(),reservation.getDate(),reservation.getDuration(),reservation.getField_id(),reservation.getReservee_id(),reservation.getRole()),HttpStatus.OK);
    }
    @CrossOrigin(origins = "*")
    @DeleteMapping("/{id}")
    public ResponseEntity<Optional<Reservation>> deleteReservation(@PathVariable Integer id){
        return new ResponseEntity<Optional<Reservation>>(reservationService.deleteReservation(id),HttpStatus.OK);
    }
}
