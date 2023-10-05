package com.risto.ristomanager.frames;

import java.awt.GridLayout;

public class listOfOrdersFrame extends javax.swing.JFrame {

    public void searchIDOrders(int ID) {
        OrderIDPanel.removeAll();
        try {

            SQLHandler.select("SELECT * FROM orders where Order_ID='" + ID + "'and Order_Paid= 0");
            if (SQLHandler.resultSet.next()) {
                String IDs = SQLHandler.resultSet.getString("Order_ID");
                OrderIDPanel.add(new OrderLiBox(IDs));

            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
        OrderIDPanel.repaint();
        OrderIDPanel.revalidate();
    }

    public void searchIDOrdersCHEF(int ID) {
        OrderIDPanel.removeAll();
        try {

            SQLHandler.select("SELECT * FROM orders where Order_ID='" + ID + "'and Order_Paid= 1");
            if (SQLHandler.resultSet.next()) {
                String IDs = SQLHandler.resultSet.getString("Order_ID");
                OrderIDPanel.add(new OrderLiBox(IDs));

            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
        OrderIDPanel.repaint();
        OrderIDPanel.revalidate();
    }

    public void refreshIDOrders() {
        try {
            SQLHandler.select("SELECT * FROM orders where Order_Paid= 0  ");
            if (SQLHandler.resultSet.next()) {

                while (SQLHandler.resultSet.next()) {
                    String IDs = SQLHandler.resultSet.getString("Order_ID");

                    OrderIDPanel.add(new OrderLiBox(IDs));
                }

            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }

    }

    public void refreshIDOrdersCHEF() {
        try {
            SQLHandler.select("SELECT * FROM orders where Order_Paid= 1 and Order_Ready=0");
            if (SQLHandler.resultSet.next()) {

                while (SQLHandler.resultSet.next()) {
                    String IDs = SQLHandler.resultSet.getString("Order_ID");

                    OrderIDPanel.add(new OrderLiBox(IDs));
                }

            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }

    }

    public listOfOrdersFrame() {
        initComponents();
        OrderIDPanel.setLayout(new GridLayout(0, 3));

    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jButton3 = new javax.swing.JButton();
        SearchPanel = new javax.swing.JTextField();
        jScrollPane1 = new javax.swing.JScrollPane();
        OrderIDPanel = new javax.swing.JPanel();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Orders List");

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 36)); // NOI18N
        jLabel1.setText("Orders");

        jButton3.setBackground(new java.awt.Color(255, 51, 51));
        jButton3.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        jButton3.setForeground(new java.awt.Color(255, 255, 255));
        jButton3.setText("Back");
        jButton3.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jButton3MouseClicked(evt);
            }
        });
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });

        SearchPanel.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                SearchPanelActionPerformed(evt);
            }
        });
        SearchPanel.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                SearchPanelKeyReleased(evt);
            }
        });

        jScrollPane1.setHorizontalScrollBarPolicy(javax.swing.ScrollPaneConstants.HORIZONTAL_SCROLLBAR_NEVER);
        jScrollPane1.setVerticalScrollBarPolicy(javax.swing.ScrollPaneConstants.VERTICAL_SCROLLBAR_ALWAYS);

        OrderIDPanel.setLayout(new java.awt.GridLayout(1, 0));
        jScrollPane1.setViewportView(OrderIDPanel);

        jButton1.setBackground(new java.awt.Color(0, 153, 153));
        jButton1.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jButton1.setForeground(new java.awt.Color(255, 255, 255));
        jButton1.setText("SEARCH");
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

        jButton2.setBackground(new java.awt.Color(0, 153, 153));
        jButton2.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jButton2.setForeground(new java.awt.Color(255, 255, 255));
        jButton2.setText("Refresh ");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(75, 75, 75)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 814, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(jLabel1)
                                .addGap(316, 316, 316)
                                .addComponent(SearchPanel, javax.swing.GroupLayout.PREFERRED_SIZE, 236, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(jButton1)))
                        .addContainerGap(88, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jButton3, javax.swing.GroupLayout.PREFERRED_SIZE, 145, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 145, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(110, 110, 110))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(12, 12, 12)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(SearchPanel, javax.swing.GroupLayout.PREFERRED_SIZE, 41, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 53, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 45, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 359, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jButton3, javax.swing.GroupLayout.PREFERRED_SIZE, 45, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 43, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(35, 35, 35))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jButton3ActionPerformed

    private void jButton3MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jButton3MouseClicked
        // TODO add your handling code here:
        OrderIDPanel.removeAll();
        if (mainProgram.account.equals("Cashier")) {
            mainProgram.CashierFrame.setVisible(true);
            this.setVisible(false);
        }
        if (mainProgram.account.equals("Cook")) {
            mainProgram.CookFrame.setVisible(true);
            this.setVisible(false);
        }

    }//GEN-LAST:event_jButton3MouseClicked

    private void SearchPanelActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_SearchPanelActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_SearchPanelActionPerformed

    private void SearchPanelKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_SearchPanelKeyReleased
        // TODO add your handling code here:
    }//GEN-LAST:event_SearchPanelKeyReleased

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        String SQuery = SearchPanel.getText();
        int IDD = Integer.parseInt(SQuery);
        if (mainProgram.account.equals("Cashier")) {
            searchIDOrders(IDD);
        }
        if (mainProgram.account.equals("Cook")) {
            searchIDOrdersCHEF(IDD);
        }

        SearchPanel.setText("");
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jButton1MouseClicked
        // TODO add your handling code here:

    }//GEN-LAST:event_jButton1MouseClicked

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:
        if (mainProgram.account.equals("Cook")) {
            this.setVisible(false);
            mainProgram.listOfOrdersFrame.OrderIDPanel.removeAll();
            mainProgram.listOfOrdersFrame.refreshIDOrdersCHEF();
            mainProgram.listOfOrdersFrame.setVisible(true);
        }
        if (mainProgram.account.equals("Cashier")) {
            this.setVisible(false);
            mainProgram.listOfOrdersFrame.OrderIDPanel.removeAll();
            mainProgram.listOfOrdersFrame.refreshIDOrders();
            mainProgram.listOfOrdersFrame.setVisible(true);
        }
    }//GEN-LAST:event_jButton2ActionPerformed

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
            java.util.logging.Logger.getLogger(listOfOrdersFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(listOfOrdersFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(listOfOrdersFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(listOfOrdersFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new listOfOrdersFrame().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    public javax.swing.JPanel OrderIDPanel;
    private javax.swing.JTextField SearchPanel;
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JScrollPane jScrollPane1;
    // End of variables declaration//GEN-END:variables
}
