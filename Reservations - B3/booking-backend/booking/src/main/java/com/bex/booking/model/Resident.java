package com.bex.booking.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.bson.types.ObjectId;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.DBRef;
import org.springframework.data.mongodb.core.mapping.Document;

import java.util.*;

@Document(collection = "residents")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Resident {
    @Id
    private ObjectId id ;
    private Integer index ;
    private String first_name;
    private String last_name;
    private String email;
    private String password ;
    private String phone;
    private Integer res_total;
    private Integer unit_id;



    public Resident(Integer index, String first_name, String last_name, String email, String password, String phone, Integer res_total, Integer unit_id) {
        this.index = index;
        this.first_name = first_name;
        this.last_name = last_name;
        this.email = email;
        this.password = password;
        this.phone = phone;
        this.res_total = res_total;
        this.unit_id = unit_id;

    }


}
