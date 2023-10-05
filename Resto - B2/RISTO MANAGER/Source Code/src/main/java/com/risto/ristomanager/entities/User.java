package com.risto.ristomanager.entities;

import com.risto.ristomanager.frames.SQLHandler;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.ArrayList;

public class User {

    private int userID;
    private String userType;
    private String userEmail;
    private String userPassword;

    public int getUserID() {
        return userID;
    }

    public void setUserID(int userID) {
        this.userID = userID;
    }

    public String getUserType() {
        return userType;
    }

    public void setUserType(String userType) {
        this.userType = userType;
    }

    public String getUserEmail() {
        return userEmail;
    }

    public void setUserEmail(String userEmail) {
        this.userEmail = userEmail;
    }

    public String getUserPassword() {
        return userPassword;
    }

    public void setUserPassword(String userPassword) {
        this.userPassword = userPassword;
    }

    public User() {
    }

    public User(int userID, String userType, String userEmail, String userPassword) {
        this.userID = userID;
        this.userType = userType;
        this.userEmail = userEmail;
        this.userPassword = userPassword;
    }

    public static void importUsers(ArrayList<User> usersList) {
        try {
            SQLHandler.select("SELECT * FROM users");

            if (usersList.size() > 0) {
                usersList.clear();
            }

            while (SQLHandler.resultSet.next()) {
                User newUser = new User();
                newUser.setUserID(SQLHandler.resultSet.getInt("User_ID"));
                newUser.setUserType(SQLHandler.resultSet.getString("User_Type"));
                newUser.setUserEmail(SQLHandler.resultSet.getString("User_Email"));
                newUser.setUserPassword(SQLHandler.resultSet.getString("User_Password"));
                usersList.add(newUser);
            }
            SQLHandler.connection.close();

        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
    }

}
