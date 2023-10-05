package com.bex.booking.repository;

import com.bex.booking.model.ERole;
import com.bex.booking.model.Role;
import org.springframework.data.mongodb.repository.MongoRepository;

import java.util.Optional;

public interface RoleRepository extends MongoRepository<Role,String> {
    Optional<Role> findByName(ERole name);
}
