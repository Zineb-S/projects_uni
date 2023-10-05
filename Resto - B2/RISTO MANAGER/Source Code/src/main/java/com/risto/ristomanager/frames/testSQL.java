package com.risto.ristomanager.frames;

import java.sql.*;

public class testSQL {

    public static void main(String[] args) {

        try {
            Connection connection = null;
            //STEP 1 : LOFAD MYSQL DRIVER
            Class.forName("com.mysql.cj.jdbc.Driver");
            //STEP 2 : OPEN CONNECTION
            connection = DriverManager.getConnection("jdbc:mysql://localhost/risto", "root", "");
            //STEP 3 : EXECUTE QUERIES (SQL)
            //INIT STATEMENT OBJECT
            Statement statement = connection.createStatement();

            //EXAMPLE OF INSERT / UPDATE / DELETE : USE execute(SQL)
            //statement.execute("INSERT INTO testtable VALUES(NULL, 'test')");
            //statement.execute("UPDATE testtable SET name = 'test22' WHERE id = 1");
            //statement.execute("DELETE FROM testtable WHERE id = 1");
            statement.execute("INSERT INTO products VALUES (NULL,'zineb',56,'jjjj','drink')");
            //EXAMPLE OF SELECT : executeQuery(SQL)
            ResultSet result = statement.executeQuery("SELECT * FROM users");
            while (result.next()) {
                System.out.println("ID : " + result.getInt("User_ID") + ", TYPE : " + result.getString("User_Type"));
            }
            try {
                //SQLHandler.execute("INSERT INTO testtable VALUES(NULL, 'new Name')");
                SQLHandler.select("SELECT * from products");
                while (SQLHandler.resultSet.next()) {
                    System.out.println("Name : " + SQLHandler.resultSet.getString("Product_Name") + " Price : " + SQLHandler.resultSet.getString("Product_Price") + " Category : " + SQLHandler.resultSet.getString("Product_Category"));
                }
            } catch (Exception e) {
            }
            //CLOSE CONNECTION
            connection.close();

        } catch (Exception e) {
            System.out.println("Error : " + e.getMessage());
        }

    }

}
