package com.bex.booking.service;

import com.bex.booking.model.User;
import com.bex.booking.repository.ReservationRepository;
import com.bex.booking.model.Reservation;
import com.mongodb.client.result.UpdateResult;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.data.mongodb.core.MongoTemplate;
import org.springframework.data.mongodb.core.query.Criteria;
import org.springframework.data.mongodb.core.query.Query;
import org.springframework.data.mongodb.core.query.Update;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
@Service

public class ReservationService {
    @Autowired
    private ReservationRepository reservationRepository;
    @Autowired
    private MongoTemplate mongoTemplate;
    public List<Reservation> allReservations(){
        return reservationRepository.findAll();
    }
    public Optional<Reservation> singleReservation(Integer id ){
        return reservationRepository.findReservationByIndex(id);
    }
    public List<Reservation> reservationsByReserveeId(Integer reservee_id){
        Query query = new Query().addCriteria(Criteria.where("reservee_id").is(reservee_id));
        return mongoTemplate.find(query, Reservation.class);
    }

    public Reservation createReservation(Integer id ,  String date,Integer duration,Integer field_id ,Integer reservee_id , String role){


        return reservationRepository.insert(new Reservation(id,date,duration,field_id,reservee_id,role));
    }
    public String updateReservation(Integer id ,  String date,Integer duration,Integer field_id ,Integer reservee_id , String role){
        Query query = new Query().addCriteria(Criteria.where("index").is(id));
        Update updateDate = new Update().set("date",date);
        Update updateDuration= new Update().set("duration",duration);
        Update updateFieldID = new Update().set("field_id",field_id);
        Update updateReserveeID = new Update().set("reservee_id",reservee_id);
        Update updateRole = new Update().set("role",role);


        UpdateResult result1 = mongoTemplate.updateFirst(query,updateDate,Reservation.class);
        UpdateResult result2 = mongoTemplate.updateFirst(query,updateDuration,Reservation.class);
        UpdateResult result3 = mongoTemplate.updateFirst(query,updateFieldID,Reservation.class);
        UpdateResult result4 = mongoTemplate.updateFirst(query,updateReserveeID,Reservation.class);
        UpdateResult result5 = mongoTemplate.updateFirst(query,updateRole,Reservation.class);



        return result1.toString()+result2.toString()+result3.toString()+result4.toString()+result5.toString();
    }
    public Optional<Reservation> deleteReservation(Integer id ){
        return reservationRepository.deleteReservationByIndex(id);
    }

    public int getNextAvailableIndex() {
        Pageable topOne = PageRequest.of(0, 1);
        List<Reservation> reservations = reservationRepository.findAllResOrderByIndexDesc(topOne);

        if (reservations.isEmpty()) {
            return 1; // Set the default index value if no users are found
        }

        return reservations.get(0).getIndex() + 1;
    }

}
