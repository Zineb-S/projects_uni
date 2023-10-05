package com.bex.booking.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.bson.types.ObjectId;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.Document;

@Document(collection = "fields")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Field {
    @Id
    private ObjectId id ;
    private Integer index ;
    private String type;
    private Integer fee;

    public Field(Integer index, String type, Integer fee) {
        this.index = index;
        this.type = type;
        this.fee = fee;
    }
}
