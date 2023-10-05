package com.risto.ristomanager.entities;

import com.risto.ristomanager.frames.SQLHandler;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.ArrayList;

public class Screen {

    private int screenID;
    private String screenType;
    private String screenEmail;
    private String screenPassword;
    private boolean screenStatus;

    public int getScreenID() {
        return screenID;
    }

    public void setScreenID(int screenID) {
        this.screenID = screenID;

    }

    public boolean getScreenStatus() {
        return screenStatus;
    }

    public void setScreenType(String screenType) {
        this.screenType = screenType;
    }

    public String getScreenEmail() {
        return screenEmail;
    }

    public void setScreenEmail(String screenEmail) {
        this.screenEmail = screenEmail;
    }

    public String getScreenPassword() {
        return screenPassword;
    }

    public void setScreenPassword(String screenPassword) {
        this.screenPassword = screenPassword;
    }

    public String getScreenType() {
        return screenType;
    }

    public void setScreenStatus(boolean screenStatus) {
        this.screenStatus = screenStatus;
    }

    public Screen() {
    }

    public Screen(int screenID, String screenType, String screenEmail, String screenPassword, boolean screenStatus) {
        this.screenID = screenID;
        this.screenType = screenType;
        this.screenEmail = screenEmail;
        this.screenPassword = screenPassword;
        this.screenStatus = screenStatus;

    }

    public static void importScreens(ArrayList<Screen> screensList) {
        try {
            SQLHandler.select("SELECT * FROM users where User_Type='Screen'");

            if (screensList.size() > 0) {
                screensList.clear();
            }

            while (SQLHandler.resultSet.next()) {
                Screen newScreen = new Screen();
                newScreen.setScreenID(SQLHandler.resultSet.getInt("User_ID"));
                newScreen.setScreenType(SQLHandler.resultSet.getString("User_Type"));
                newScreen.setScreenEmail(SQLHandler.resultSet.getString("User_Email"));
                newScreen.setScreenPassword(SQLHandler.resultSet.getString("User_Password"));
                screensList.add(newScreen);
            }
            SQLHandler.connection.close();

        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
    }
}
