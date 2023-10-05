package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.*;
import java.awt.Image;
import java.awt.Toolkit;
import java.util.ArrayList;
import java.util.Hashtable;
import javax.swing.JFrame;
import javax.swing.UIManager;

public class mainProgram {

    public static MainMenuFrame MainMenuFrame;
    public static LoginFrame LoginFrame;
    public static CashierFrame CashierFrame;
    public static CookFrame CookFrame;
    public static OrderDetailsUserFrame OrderDetailsUserFrame;
    public static OrderDetailsCashierFrame OrderDetailsCashierFrame;
    public static OrderDetailsCookFrame1 OrderDetailsCookFrame1;
    public static TicketFrame TicketFrame;
    public static listOfOrdersFrame listOfOrdersFrame;
    public static listOfScreensFrame listOfScreensFrame;
    public static ClientAdminFrame ClientAdminFrame;
    public static OrdersDisplayFrame OrdersDisplayFrame;

    public static ArrayList<Product> liOfProducts = new ArrayList<Product>();
    public static ArrayList<User> liOfUsers = new ArrayList<User>();
    public static ArrayList<Order> liOfOrders = new ArrayList<Order>();
    public static ArrayList<Screen> liOfScreens = new ArrayList<Screen>();
    public static Hashtable<String, String> my_dict = new Hashtable<String, String>();

    public static String account;

    public static void setIcon(JFrame window) {
        //LOAD IMAGE FILE
        Image icon = Toolkit.getDefaultToolkit().getImage("images/icon.png");
        //SET FRAME ICON
        window.setIconImage(icon);
    }

    public static void main(String[] args) {
        try {
            UIManager.setLookAndFeel(new com.formdev.flatlaf.FlatDarkLaf());
        } catch (Exception ex) {
            System.out.println("Error lookAndFeel : " + ex.getMessage());
        }
        Product.importProducts(liOfProducts);
        User.importUsers(liOfUsers);
        Order.importOrders(liOfOrders);
        Screen.importScreens(liOfScreens);
        MainMenuFrame = new MainMenuFrame();
        LoginFrame = new LoginFrame();
        CashierFrame = new CashierFrame();
        CookFrame = new CookFrame();
        OrderDetailsUserFrame = new OrderDetailsUserFrame();
        OrderDetailsCashierFrame = new OrderDetailsCashierFrame();
        OrderDetailsCookFrame1 = new OrderDetailsCookFrame1();
        TicketFrame = new TicketFrame();
        listOfOrdersFrame = new listOfOrdersFrame();
        listOfScreensFrame = new listOfScreensFrame();
        ClientAdminFrame = new ClientAdminFrame();
        OrdersDisplayFrame = new OrdersDisplayFrame();
        setIcon(MainMenuFrame);
        setIcon(LoginFrame);
        setIcon(CashierFrame);
        setIcon(CookFrame);
        setIcon(OrderDetailsUserFrame);
        setIcon(OrderDetailsCashierFrame);
        setIcon(OrderDetailsCookFrame1);
        setIcon(TicketFrame);
        setIcon(listOfOrdersFrame);
        setIcon(listOfScreensFrame);
        setIcon(ClientAdminFrame);
        setIcon(OrdersDisplayFrame);

        ClientAdminFrame.setVisible(true);

    }
}
