package com.bex.booking.payload.request;


import java.util.Set;

public class SignupRequest {

    private Integer index ;
    private String username;
    private String first_name;
    private String last_name;
    private String email;
    private String password ;
    private String phone;
    private Integer res_total;
    private Set<String> roles;




    public String getUsername() {
        return username;
    }

    public Integer getIndex() {
        return index;
    }

    public void setIndex(Integer index) {
        this.index = index;
    }

    public void setFirst_name(String first_name) {
        this.first_name = first_name;
    }

    public void setLast_name(String last_name) {
        this.last_name = last_name;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public void setRes_total(Integer res_total) {
        this.res_total = res_total;
    }

    public String getFirst_name() {
        return first_name;
    }

    public String getLast_name() {
        return last_name;
    }

    public String getPhone() {
        return phone;
    }

    public Integer getRes_total() {
        return res_total;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public Set<String> getRoles() {
        return this.roles;
    }

    public void setRole(Set<String> roles) {
        this.roles = roles;
    }
}
