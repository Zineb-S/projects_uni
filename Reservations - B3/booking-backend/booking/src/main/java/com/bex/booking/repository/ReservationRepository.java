package com.bex.booking.repository;

import com.bex.booking.model.Reservation;
import com.bex.booking.model.User;
import org.bson.types.ObjectId;
import org.springframework.data.domain.Pageable;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.data.mongodb.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public interface ReservationRepository extends MongoRepository<Reservation, ObjectId> {
    Optional<Reservation> findReservationByIndex(Integer id);
    Optional<Reservation> deleteReservationByIndex(Integer id);


    @Query(value = "{}", fields = "{'index': 1}", sort = "{'index': -1}")
    List<Reservation> findAllResOrderByIndexDesc(Pageable pageable);
}
