package com.bex.booking.repository;

import com.bex.booking.model.Resident;
import org.bson.types.ObjectId;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface ResidentRepository extends MongoRepository<Resident, ObjectId> {
    Optional<Resident> findResidentByIndex(Integer id);
    Optional<Resident> findByEmail(String email);
    Optional<Resident> deleteResidentByIndex(Integer id);

    Boolean existsByEmail(String email);
}
