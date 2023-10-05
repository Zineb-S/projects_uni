package com.bex.booking.repository;

import com.bex.booking.model.Field;
import org.bson.types.ObjectId;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface FieldRepository extends MongoRepository<Field, ObjectId> {
    Optional<Field> findFieldByIndex(Integer id);
    Optional<Field> deleteFieldByIndex(Integer id);
}
