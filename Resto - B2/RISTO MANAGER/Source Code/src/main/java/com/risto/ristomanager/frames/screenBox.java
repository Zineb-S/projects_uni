/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JPanel.java to edit this template
 */
package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.Screen;
import java.awt.Graphics;
import java.awt.Image;
import java.io.File;
import javax.imageio.ImageIO;
import javax.swing.JOptionPane;
import javax.swing.JOptionPane;
import javax.swing.JPasswordField;

/**
 *
 * @author Zineb
 */
public class screenBox extends javax.swing.JPanel {

    Image ScreenPicture;

    public screenBox(String imgUrl, String ScreenStatus, String ID) {
        initComponents();
        ScreenStatusLabel.setText(ScreenStatus);
        IDLabel.setText(ID);
        try {
            ScreenPicture = ImageIO.read(new File(imgUrl));

        } catch (Exception e) {
            JOptionPane.showMessageDialog(this, "Error on reading image : " + e.getMessage());
        }

    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        g.drawImage(ScreenPicture, 30, 30, 160, 160, ScreenIcon);
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        ScreenIcon = new javax.swing.JPanel();
        TurnONbutton = new javax.swing.JButton();
        TurnOFFbutton = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        ScreenStatusLabel = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        IDLabel = new javax.swing.JLabel();

        ScreenIcon.setOpaque(false);
        ScreenIcon.setPreferredSize(new java.awt.Dimension(160, 160));

        javax.swing.GroupLayout ScreenIconLayout = new javax.swing.GroupLayout(ScreenIcon);
        ScreenIcon.setLayout(ScreenIconLayout);
        ScreenIconLayout.setHorizontalGroup(
            ScreenIconLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 160, Short.MAX_VALUE)
        );
        ScreenIconLayout.setVerticalGroup(
            ScreenIconLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 0, Short.MAX_VALUE)
        );

        TurnONbutton.setBackground(new java.awt.Color(0, 153, 0));
        TurnONbutton.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        TurnONbutton.setForeground(new java.awt.Color(255, 255, 255));
        TurnONbutton.setText("ON");
        TurnONbutton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                TurnONbuttonActionPerformed(evt);
            }
        });

        TurnOFFbutton.setBackground(new java.awt.Color(255, 0, 0));
        TurnOFFbutton.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        TurnOFFbutton.setForeground(new java.awt.Color(255, 255, 255));
        TurnOFFbutton.setText("OFF");
        TurnOFFbutton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                TurnOFFbuttonActionPerformed(evt);
            }
        });

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jLabel1.setText("Status : ");

        ScreenStatusLabel.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        ScreenStatusLabel.setText("OFF");

        jLabel2.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jLabel2.setText("Screen ID:");

        IDLabel.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        IDLabel.setText("0");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(28, 28, 28)
                .addComponent(ScreenIcon, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(54, 54, 54)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(TurnONbutton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(TurnOFFbutton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(45, 45, 45)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jLabel2)
                    .addComponent(jLabel1))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(ScreenStatusLabel)
                    .addComponent(IDLabel))
                .addContainerGap(115, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(44, 44, 44)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(TurnONbutton, javax.swing.GroupLayout.PREFERRED_SIZE, 47, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel2)
                    .addComponent(IDLabel))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(TurnOFFbutton, javax.swing.GroupLayout.PREFERRED_SIZE, 47, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(jLabel1)
                        .addComponent(ScreenStatusLabel)))
                .addContainerGap(26, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(ScreenIcon, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );
    }// </editor-fold>//GEN-END:initComponents

    private void TurnONbuttonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_TurnONbuttonActionPerformed
        // TODO add your handling code here:
        String ScreenID = IDLabel.getText();
        String ScreenEmailInput = JOptionPane.showInputDialog("Please Enter The Screen Email");

        JPasswordField pwd = new JPasswordField(10);
        int action = JOptionPane.showConfirmDialog(null, pwd, "Enter Password", JOptionPane.OK_CANCEL_OPTION);
        if (action < 0) {
            JOptionPane.showMessageDialog(null, "Cancel, X or escape key selected");
        }
        String myPass = String.valueOf(pwd.getPassword());
        System.out.println(myPass);

        try {
            SQLHandler.select("SELECT * FROM users where User_Email='" + ScreenEmailInput + "' and User_Password='" + myPass + "'and User_ID='" + ScreenID + "'");

            if (SQLHandler.resultSet.next()) {
                ScreenStatusLabel.setText("ON");
                System.out.println("Screen Status On");
                for (Screen ScreenLine : mainProgram.liOfScreens) {
                    if (IDLabel.getText().equals(ScreenLine.getScreenID())) {
                        ScreenLine.setScreenStatus(true);
                    }
                }
            }

        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }
    }//GEN-LAST:event_TurnONbuttonActionPerformed

    private void TurnOFFbuttonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_TurnOFFbuttonActionPerformed
        // TODO add your handling code here:
        for (Screen ScreenLine : mainProgram.liOfScreens) {
            if (IDLabel.getText().equals(ScreenLine.getScreenID())) {
                ScreenLine.setScreenStatus(false);
            }
        }

        ScreenStatusLabel.setText("OFF");
    }//GEN-LAST:event_TurnOFFbuttonActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel IDLabel;
    private javax.swing.JPanel ScreenIcon;
    private javax.swing.JLabel ScreenStatusLabel;
    private javax.swing.JButton TurnOFFbutton;
    private javax.swing.JButton TurnONbutton;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    // End of variables declaration//GEN-END:variables
}
