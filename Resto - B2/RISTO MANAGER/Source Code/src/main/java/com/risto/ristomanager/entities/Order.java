package com.risto.ristomanager.entities;

import com.risto.ristomanager.frames.SQLHandler;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.ArrayList;

public class Order {

    private int orderID;
    private String orderDate;
    private String orderList;
    private boolean orderPaid;
    private boolean orderReady;

    public int getOrderID() {
        return orderID;
    }

    public void setOrderID(int orderID) {
        this.orderID = orderID;
    }

    public String getOrderDate() {
        return orderDate;
    }

    public void setOrderDate(String orderDate) {
        this.orderDate = orderDate;
    }

    public String getOrderList() {
        return orderList;
    }

    public void setOrderList(String orderList) {
        this.orderList = orderList;
    }

    public boolean getOrderPaid() {
        return orderPaid;
    }

    public void setOrderPaid(boolean orderPaid) {
        this.orderPaid = orderPaid;
    }

    public boolean getOrderReady() {
        return orderReady;
    }

    public void setOrderReady(boolean orderReady) {
        this.orderReady = orderReady;
    }

    public Order() {
    }

    public Order(int orderID, String orderList, String orderDate, boolean orderPaid, boolean orderReady) {
        this.orderID = orderID;
        this.orderDate = orderDate;
        this.orderPaid = orderPaid;
        this.orderReady = orderReady;
        this.orderList = orderList;

    }

    public static void importOrders(ArrayList<Order> ordersList) {
        try {
            SQLHandler.select("SELECT * FROM orders");

            if (ordersList.size() > 0) {
                ordersList.clear();             // I NEED AN EXPORT INSERT SQL METHOD 
            }
            while (SQLHandler.resultSet.next()) {
                Order newOrder = new Order();
                newOrder.setOrderID(SQLHandler.resultSet.getInt("Order_ID"));
                newOrder.setOrderDate(SQLHandler.resultSet.getString("Order_Date"));
                newOrder.setOrderPaid(SQLHandler.resultSet.getBoolean("Order_Paid"));
                newOrder.setOrderReady(SQLHandler.resultSet.getBoolean("Order_Ready"));
                ordersList.add(newOrder);
            }
            SQLHandler.connection.close();

        } catch (Exception e) {
            System.out.println("Error While Importing Orders : " + e.getMessage());
        }
    }

}
