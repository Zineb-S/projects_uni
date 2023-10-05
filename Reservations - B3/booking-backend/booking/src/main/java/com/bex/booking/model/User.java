package com.bex.booking.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.bson.types.ObjectId;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.DBRef;
import org.springframework.data.mongodb.core.mapping.Document;

import java.util.Collection;
import java.util.HashSet;
import java.util.Iterator;
import java.util.Set;

@Document(collection = "users")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class User {
    @Id
    private ObjectId id ;
    private Integer index ;
    private String username;
    private String first_name;
    private String last_name;
    private String email;
    private String password ;
    private String phone;
    private Integer res_total;
    @DBRef
    private Set<Role> roles = new HashSet<>();

    public User(Integer index, String username , String first_name, String last_name, String email, String password, String phone, Integer res_total) {
        this.index = index;
        this.username = username;
        this.first_name = first_name;
       this.last_name = last_name;
        this.email = email;
        this.password = password;
        this.phone = phone;
        this.res_total = res_total;
    }



   // public User(ObjectId id, Integer index, String username, String first_name, String last_name, String email, String password, String phone, Integer res_total) {
     //   this.id = id;
      //  this.index = index;
      //  this.username = username;
      //  this.first_name = first_name;
      //  this.last_name = last_name;
       // this.email = email;
      //  this.password = password;
       // this.phone = phone;
       // this.res_total = res_total;
   // }

    //public User(Integer id, String username, String firstName, String lastName, String email, String password, String phone, Integer resTotal) {

    //}

    public Set<Role> getRoles() {
        return roles;
    }

    public void setRoles(Set<Role> roles) {
        this.roles = roles;
    }
}
