package com.risto.ristomanager.frames;

import java.awt.Graphics;
import java.awt.Image;
import java.io.File;
import javax.imageio.ImageIO;
import javax.swing.JOptionPane;

public class orderBox extends javax.swing.JPanel {

    String Name;
    String Amount;
    Image productPicture;

    public orderBox(String imgUrl, String name, String amount) {
        initComponents();
        NameLabel.setText(name);
        AmountLabel.setText(amount);
        try {
            productPicture = ImageIO.read(new File(imgUrl));
        } catch (Exception e) {
            JOptionPane.showMessageDialog(this, "Error on reading image : " + e.getMessage());
        }

    }

    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        g.drawImage(productPicture, 40, 40, 100, 100, picturePanel);
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        picturePanel = new javax.swing.JPanel();
        NameLabel = new javax.swing.JLabel();
        AmountLabel = new javax.swing.JLabel();
        jLabel1 = new javax.swing.JLabel();

        picturePanel.setOpaque(false);

        javax.swing.GroupLayout picturePanelLayout = new javax.swing.GroupLayout(picturePanel);
        picturePanel.setLayout(picturePanelLayout);
        picturePanelLayout.setHorizontalGroup(
            picturePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 101, Short.MAX_VALUE)
        );
        picturePanelLayout.setVerticalGroup(
            picturePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 116, Short.MAX_VALUE)
        );

        NameLabel.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        NameLabel.setText("Product");

        AmountLabel.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        AmountLabel.setText("0");

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        jLabel1.setText("X");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(31, 31, 31)
                .addComponent(picturePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(98, 98, 98)
                .addComponent(AmountLabel)
                .addGap(18, 18, 18)
                .addComponent(jLabel1)
                .addGap(18, 18, 18)
                .addComponent(NameLabel)
                .addContainerGap(46, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(29, 29, 29)
                .addComponent(picturePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
            .addGroup(layout.createSequentialGroup()
                .addGap(62, 62, 62)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(NameLabel)
                    .addComponent(AmountLabel)
                    .addComponent(jLabel1)))
        );
    }// </editor-fold>//GEN-END:initComponents


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel AmountLabel;
    private javax.swing.JLabel NameLabel;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JPanel picturePanel;
    // End of variables declaration//GEN-END:variables
}
