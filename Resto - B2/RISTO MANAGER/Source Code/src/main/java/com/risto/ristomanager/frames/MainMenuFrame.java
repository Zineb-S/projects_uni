package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.Product;
import static com.risto.ristomanager.frames.mainProgram.MainMenuFrame;
import static com.risto.ristomanager.frames.mainProgram.my_dict;
import java.awt.GridLayout;
import javax.swing.JOptionPane;
import com.risto.ristomanager.frames.productBox;
import java.util.TimerTask;
import javax.swing.Timer;

public class MainMenuFrame extends javax.swing.JFrame {

    public static int panelcounter;
    public static float panelPrice;
    public static int init = 0;

    public void updatePanel() {
        priceLabel.setText(panelPrice + " DH");
    }

    public void updateItems() {
        counter.setText(panelcounter + " Items");
    }

    public void refreshList() {
        productsPanel.setLayout(new GridLayout(0, 3));
        for (Product productLine : mainProgram.liOfProducts) {
            String[] productData = new String[6];
            productData[0] = "" + productLine.getProductID();
            productData[1] = productLine.getProductCategory();
            productData[2] = productLine.getProductName();
            productData[3] = "" + productLine.getProductPrice();
            productData[4] = "" + productLine.getProductPicture();
            productData[5] = "" + productLine.getProductCount();
            productsPanel.add(new productBox(productData[4], productData[2], productData[3], Integer.parseInt(productData[5])));
        }

    }

    public MainMenuFrame() {
        initComponents();

        productsPanel.setLayout(new GridLayout(0, 3));
        /*productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));*/

        //productsPanel.setLayout(new GridLayout(0,4));
        //productBox p1 = new productBox("products/p1.jpg", "Product 1", "12.00");
        //p1.setBounds(0, 0, 300, 100);
        //productsPanel.add(p1);
        //productBox p2 = new productBox("products/p1.jpg", "Product 2", "55.00");
        //p2.setBounds(0, 0, 300, 100);
        //productsPanel.add(p2);
        //productsPanel.add(new productBox("products/p1.jpg", "Product 3", "15.00"));
        //productsPanel.add(new productBox("products/p1.jpg", "Product 4", "10.00"));
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        NewOrder = new javax.swing.JButton();
        Exit = new javax.swing.JButton();
        counter = new javax.swing.JLabel();
        Cancel = new javax.swing.JButton();
        Account = new javax.swing.JButton();
        priceLabel = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        productsPanel = new javax.swing.JPanel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Main Menu ");

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 50)); // NOI18N
        jLabel1.setText("Main Menu");

        NewOrder.setBackground(new java.awt.Color(255, 153, 102));
        NewOrder.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        NewOrder.setForeground(new java.awt.Color(255, 255, 255));
        NewOrder.setText("Proceed");
        NewOrder.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                NewOrderMouseClicked(evt);
            }
        });
        NewOrder.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                NewOrderActionPerformed(evt);
            }
        });

        Exit.setBackground(new java.awt.Color(255, 255, 255));
        Exit.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        Exit.setForeground(new java.awt.Color(255, 0, 51));
        Exit.setText("Exit");
        Exit.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                ExitMouseClicked(evt);
            }
        });
        Exit.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                ExitActionPerformed(evt);
            }
        });

        counter.setFont(new java.awt.Font("Montserrat", 1, 24)); // NOI18N
        counter.setText("0");

        Cancel.setBackground(new java.awt.Color(255, 255, 255));
        Cancel.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        Cancel.setForeground(new java.awt.Color(255, 0, 51));
        Cancel.setText("Cancel");
        Cancel.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                CancelMouseClicked(evt);
            }
        });
        Cancel.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                CancelActionPerformed(evt);
            }
        });

        Account.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        Account.setText("Account");
        Account.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                AccountMouseClicked(evt);
            }
        });

        priceLabel.setFont(new java.awt.Font("Montserrat", 1, 24)); // NOI18N
        priceLabel.setText("Total : 00.00");

        jScrollPane1.setHorizontalScrollBarPolicy(javax.swing.ScrollPaneConstants.HORIZONTAL_SCROLLBAR_NEVER);
        jScrollPane1.setToolTipText("");
        jScrollPane1.setVerticalScrollBarPolicy(javax.swing.ScrollPaneConstants.VERTICAL_SCROLLBAR_ALWAYS);

        productsPanel.setLayout(new java.awt.GridLayout(1, 0));
        jScrollPane1.setViewportView(productsPanel);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jScrollPane1))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(79, 79, 79)
                        .addComponent(Exit, javax.swing.GroupLayout.PREFERRED_SIZE, 100, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(166, 166, 166)
                        .addComponent(priceLabel)
                        .addGap(117, 117, 117)
                        .addComponent(counter, javax.swing.GroupLayout.PREFERRED_SIZE, 144, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 33, Short.MAX_VALUE)
                        .addComponent(Cancel, javax.swing.GroupLayout.PREFERRED_SIZE, 101, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(NewOrder)
                        .addGap(14, 14, 14))
                    .addGroup(layout.createSequentialGroup()
                        .addGap(40, 40, 40)
                        .addComponent(Account)
                        .addGap(232, 232, 232)
                        .addComponent(jLabel1)
                        .addGap(0, 0, Short.MAX_VALUE)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(31, 31, 31)
                        .addComponent(Account, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 73, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 362, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(29, 29, 29)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(counter, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(priceLabel, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(8, 8, 8))
                    .addComponent(Exit, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, 61, Short.MAX_VALUE)
                    .addComponent(Cancel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(NewOrder, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void NewOrderActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_NewOrderActionPerformed
        // TODO add your handling code here:
        
    }//GEN-LAST:event_NewOrderActionPerformed

    private void ExitActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_ExitActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_ExitActionPerformed

    private void CancelActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_CancelActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_CancelActionPerformed

    private void NewOrderMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_NewOrderMouseClicked
        
        
        if (my_dict.isEmpty()==false) {
        MainMenuFrame.NewOrder.setEnabled(true);
        my_dict.put("Total" , MainMenuFrame.priceLabel.getText());
        mainProgram.OrderDetailsUserFrame.refreshClientOrder();
        mainProgram.OrderDetailsUserFrame.setVisible(true);
        this.setVisible(false);
        }
               // TODO add your handling code here:
    }//GEN-LAST:event_NewOrderMouseClicked

    private void CancelMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_CancelMouseClicked
        my_dict.clear();
        panelPrice = 0;
        panelcounter = 0;
        for (Product productLine : mainProgram.liOfProducts) {
            //System.out.println(" cancel all " + productLine.getProductName());
            //System.out.println(" cancel all count" + productLine.getProductCount());
            productLine.setProductCount(0);
            //  System.out.println(" cancel all count" + productLine.getProductCount());
            

        }
        productsPanel.removeAll();
        priceLabel.setText(panelPrice + " DH");
        counter.setText(panelcounter + " Items");
        refreshList();
        // TODO add your handling code here:
    }//GEN-LAST:event_CancelMouseClicked

    private void AccountMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_AccountMouseClicked
        // TODO add your handling code here:
        mainProgram.CashierFrame.setVisible(true);
        this.setVisible(false);

    }//GEN-LAST:event_AccountMouseClicked

    private void ExitMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_ExitMouseClicked
        // TODO add your handling code here
        productsPanel.removeAll();
        mainProgram.ClientAdminFrame.setVisible(true);
        this.dispose();


    }//GEN-LAST:event_ExitMouseClicked

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
            java.util.logging.Logger.getLogger(MainMenuFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(MainMenuFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(MainMenuFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(MainMenuFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new MainMenuFrame().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    public javax.swing.JButton Account;
    public javax.swing.JButton Cancel;
    private javax.swing.JButton Exit;
    public javax.swing.JButton NewOrder;
    public javax.swing.JLabel counter;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JScrollPane jScrollPane1;
    public javax.swing.JLabel priceLabel;
    public javax.swing.JPanel productsPanel;
    // End of variables declaration//GEN-END:variables

}
