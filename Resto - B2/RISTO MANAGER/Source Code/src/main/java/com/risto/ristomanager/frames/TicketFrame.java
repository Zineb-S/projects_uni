package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.Order;
import com.risto.ristomanager.entities.Product;
import static com.risto.ristomanager.frames.MainMenuFrame.panelPrice;
import static com.risto.ristomanager.frames.MainMenuFrame.panelcounter;
import static com.risto.ristomanager.frames.mainProgram.MainMenuFrame;
import static com.risto.ristomanager.frames.mainProgram.my_dict;
import java.awt.print.PageFormat;
import java.awt.print.PrinterJob;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

public class TicketFrame extends javax.swing.JFrame {

    public void refreshTicket(int OrderID) {
        //STEP 1 : Create a new Model

        System.out.println(OrderID);
        DefaultTableModel model = new DefaultTableModel();

        DefaultTableModel model2 = new DefaultTableModel();
        //STEP 2 : Init Model Columns
        model.addColumn("Item");
        model.addColumn("Amount");
        model.addColumn("Price");

        model2.addColumn("Total");

        //STEP 3 : Get data from ArrayList
        try {
            SQLHandler.select("SELECT * FROM orders where Order_ID='" + OrderID + "'");
            if (SQLHandler.resultSet.next()) {
                String[] orderData = new String[3];
                String[] orderTotal = new String[1];

                for (String name : my_dict.keySet()) {
                    String key = name.toString();
                    String value = my_dict.get(name).toString();
                    System.out.println(key + " " + value);

                    if (key.equals("Total")) {
                        orderTotal[0] = value.toString();
                        model2.addRow(orderTotal);
                    } else {
                        orderData[0] = key.toString(); //Item
                        orderData[1] = value.toString();//Amount

                        for (Product productLine : mainProgram.liOfProducts) {
                            if (productLine.getProductName().equals(key)) {
                                int Price = productLine.getProductPrice();
                                int num = Integer.parseInt(value);
                                num *= Price;

                                orderData[2] = String.valueOf(num) + " DH ";
                            }
                        }
                        //price of item total
                        model.addRow(orderData);

                    }

                }

                String DateT = SQLHandler.resultSet.getString("Order_Date");
                Date.setText(DateT);

            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
        ItemsTable.setModel(model);
        TotalTable.setModel(model2);
    }

    public TicketFrame() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jButton1 = new javax.swing.JButton();
        jToggleButton1 = new javax.swing.JToggleButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        ItemsTable = new javax.swing.JTable();
        jLabel2 = new javax.swing.JLabel();
        OrderID = new javax.swing.JLabel();
        jScrollPane2 = new javax.swing.JScrollPane();
        TotalTable = new javax.swing.JTable();
        jLabel3 = new javax.swing.JLabel();
        Date = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Ticket");

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 36)); // NOI18N
        jLabel1.setText("Ticket");

        jButton1.setBackground(new java.awt.Color(255, 255, 255));
        jButton1.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        jButton1.setForeground(new java.awt.Color(255, 0, 51));
        jButton1.setText("Main Menu");
        jButton1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jButton1MouseClicked(evt);
            }
        });
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        jToggleButton1.setBackground(new java.awt.Color(255, 153, 102));
        jToggleButton1.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        jToggleButton1.setForeground(new java.awt.Color(255, 255, 255));
        jToggleButton1.setText("Print");
        jToggleButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jToggleButton1ActionPerformed(evt);
            }
        });

        ItemsTable.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Item", "Amount", "Price"
            }
        ));
        jScrollPane1.setViewportView(ItemsTable);

        jLabel2.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jLabel2.setText("Order ID:");

        OrderID.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        OrderID.setText("0");

        TotalTable.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "Total"
            }
        ));
        jScrollPane2.setViewportView(TotalTable);

        jLabel3.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jLabel3.setText("Date Time:");

        Date.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        Date.setText("0");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(65, 65, 65)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 452, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(183, 183, 183)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 184, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jToggleButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 184, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(74, 74, 74)
                        .addComponent(jLabel2)
                        .addGap(27, 27, 27)
                        .addComponent(OrderID)
                        .addGap(73, 73, 73)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(jLabel3)
                                .addGap(29, 29, 29)
                                .addComponent(Date))
                            .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 146, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addContainerGap(84, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel1)
                .addGap(43, 43, 43)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel2)
                    .addComponent(OrderID)
                    .addComponent(jLabel3)
                    .addComponent(Date))
                .addGap(18, 18, 18)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 91, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(33, 33, 33)
                .addComponent(jToggleButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 51, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(73, Short.MAX_VALUE))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jButton1MouseClicked
        // TODO add your handling code here:
        my_dict.clear();
        panelPrice = 0;
        panelcounter = 0;
        for (Product productLine : mainProgram.liOfProducts) {
            //System.out.println(" cancel all " + productLine.getProductName());
            //System.out.println(" cancel all count" + productLine.getProductCount());
            productLine.setProductCount(0);
            //  System.out.println(" cancel all count" + productLine.getProductCount());

        }
        mainProgram.MainMenuFrame.productsPanel.removeAll();
        mainProgram.MainMenuFrame.priceLabel.setText(panelPrice + " DH");
        mainProgram.MainMenuFrame.counter.setText(panelcounter + " Items");
        mainProgram.MainMenuFrame.productsPanel.removeAll();
        mainProgram.my_dict.clear();
        mainProgram.ClientAdminFrame.setVisible(true);
        this.setVisible(false);
    }//GEN-LAST:event_jButton1MouseClicked

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        mainProgram.my_dict.clear();
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jToggleButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jToggleButton1ActionPerformed
        // TODO add your handling code here:

        PrinterJob pjob = PrinterJob.getPrinterJob();
        PageFormat preformat = pjob.defaultPage();
        preformat.setOrientation(PageFormat.LANDSCAPE);
        PageFormat postformat = pjob.pageDialog(preformat);
//If user does not hit cancel then print.
        if (preformat != postformat) {
            //Set print component
            pjob.setPrintable(new Printer(mainProgram.TicketFrame), postformat);
            if (pjob.printDialog()) {
                try {
                    pjob.print();
                } catch (Exception e) {
                    System.out.println("Error While Importing Users : " + e.getMessage());
                }

            }
        }
        JOptionPane.showMessageDialog(this, "Thank you for ordering , This is your Ticket ! \n\n Please proceed to show it to one of our \n\n cashiers to help you pay for your order \n\n\n Have a nice day !  ");
    }//GEN-LAST:event_jToggleButton1ActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(TicketFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(TicketFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(TicketFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(TicketFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new TicketFrame().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    public javax.swing.JLabel Date;
    private javax.swing.JTable ItemsTable;
    public javax.swing.JLabel OrderID;
    private javax.swing.JTable TotalTable;
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JToggleButton jToggleButton1;
    // End of variables declaration//GEN-END:variables
}
