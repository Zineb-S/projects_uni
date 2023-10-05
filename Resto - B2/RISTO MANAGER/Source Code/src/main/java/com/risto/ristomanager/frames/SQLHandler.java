package com.risto.ristomanager.frames;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class SQLHandler {

    public static Connection connection = null;
    public static Statement statement = null;
    public static ResultSet resultSet = null;

    public static void open() {
        try {
            //STEP 1 : LOAD MYSQL DRIVER
            Class.forName("com.mysql.cj.jdbc.Driver");
            //STEP 2 : OPEN CONNECTION
            connection = DriverManager.getConnection("jdbc:mysql://localhost/risto", "root", "");
            statement = connection.createStatement();
        } catch (Exception e) {
            System.out.println("Error on open connection : " + e.getMessage());
        }
    }

    public static void execute(String SQLQuery) {
        try {
            open();
            statement.execute(SQLQuery);
        } catch (Exception e) {
            System.out.println("Error on excute query : " + e.getMessage());
        }
    }

    public static void select(String SQLQuery) {
        try {
            open();
            resultSet = statement.executeQuery(SQLQuery);
        } catch (Exception e) {
            System.out.println("Error on select query : " + e.getMessage());
        }
    }

}
