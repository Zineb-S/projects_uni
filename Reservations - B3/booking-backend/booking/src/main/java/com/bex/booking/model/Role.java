package com.bex.booking.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.Document;

@Document(collection = "roles")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class Role {
    @Id
    private String id ;
    private String name;


    public Role(ERole name) {
        this.name = String.valueOf(name);
    }
    public Role(String name) {
        this.name = name;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(ERole name) {
        this.name = String.valueOf(name);
    }
}
