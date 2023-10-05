package com.bex.booking.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.bson.types.ObjectId;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.Document;

import java.util.Date;

@Document(collection = "reservations")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Reservation {
    @Id
    private ObjectId id ;
    private Integer index ;
    private String date;
    private Integer duration;
    private Integer field_id;
    private Integer reservee_id ;
    private String role;

    public Reservation(Integer index, String date, Integer duration, Integer field_id, Integer reservee_id, String role) {
        this.index = index;
        this.date = date;
        this.duration = duration;
        this.field_id = field_id;
        this.reservee_id = reservee_id;
        this.role = role;
    }
}
