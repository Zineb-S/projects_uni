package com.bex.booking.repository;

import com.bex.booking.model.User;
import org.bson.types.ObjectId;
import org.springframework.data.domain.Pageable;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.data.mongodb.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public interface UserRepository extends MongoRepository<User, ObjectId> {

    Optional<User> findByUsername(String username);

    Boolean existsByUsername(String username);
    Optional<User> findUserByIndex(Integer id);
    Optional<User> findByEmail(String email);
    Optional<User> deleteUserByIndex(Integer id);
    Boolean existsByEmail(String email);
    @Query(value = "{}", fields = "{'index': 1}", sort = "{'index': -1}")
    List<User> findAllUsersOrderByIndexDesc(Pageable pageable);

}
