package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.Product;
import static com.risto.ristomanager.frames.mainProgram.MainMenuFrame;
import static com.risto.ristomanager.frames.mainProgram.my_dict;
import java.awt.Graphics;
import java.awt.Image;
import java.io.File;
import java.util.HashMap;
import java.util.Hashtable;
import java.util.Map;
import javax.imageio.ImageIO;
import javax.swing.JOptionPane;
import javax.swing.Timer;

public class productBox extends javax.swing.JPanel {

    Image productPicture;
    String price;
    public int count = 0;
    //Map<String, String> map = new HashMap<String, String>();
    

    public void updateItemCounts() {
        ItemCount.setText(count + "");
    }

    public productBox(String imgUrl, String name, String price, int count) {
        initComponents();
        textName.setText(name);
        textPrice.setText(price);
        ItemCount.setText(count + "");
        this.price = price;
        try {
            productPicture = ImageIO.read(new File(imgUrl));
        } catch (Exception e) {
            JOptionPane.showMessageDialog(this, "Error on reading image : " + e.getMessage());
        }

        RemoveItem.setEnabled(false);

    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        g.drawImage(productPicture, 0, 0, 100, 100, picturePanel);
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        picturePanel = new javax.swing.JPanel();
        textName = new javax.swing.JLabel();
        textPrice = new javax.swing.JLabel();
        ItemCount = new javax.swing.JLabel();
        AddItem = new javax.swing.JButton();
        RemoveItem = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();

        addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                formMouseClicked(evt);
            }
        });
        addComponentListener(new java.awt.event.ComponentAdapter() {
            public void componentShown(java.awt.event.ComponentEvent evt) {
                formComponentShown(evt);
            }
        });

        picturePanel.setOpaque(false);

        javax.swing.GroupLayout picturePanelLayout = new javax.swing.GroupLayout(picturePanel);
        picturePanel.setLayout(picturePanelLayout);
        picturePanelLayout.setHorizontalGroup(
            picturePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 100, Short.MAX_VALUE)
        );
        picturePanelLayout.setVerticalGroup(
            picturePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 100, Short.MAX_VALUE)
        );

        textName.setFont(new java.awt.Font("Tahoma", 1, 24)); // NOI18N
        textName.setText("Name");

        textPrice.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        textPrice.setText("00.00");

        ItemCount.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        ItemCount.setText("0");
        ItemCount.addComponentListener(new java.awt.event.ComponentAdapter() {
            public void componentShown(java.awt.event.ComponentEvent evt) {
                ItemCountComponentShown(evt);
            }
        });

        AddItem.setBackground(new java.awt.Color(255, 153, 102));
        AddItem.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        AddItem.setForeground(new java.awt.Color(255, 255, 255));
        AddItem.setText("+");
        AddItem.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                AddItemMouseClicked(evt);
            }
        });
        AddItem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                AddItemActionPerformed(evt);
            }
        });

        RemoveItem.setBackground(new java.awt.Color(204, 204, 204));
        RemoveItem.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        RemoveItem.setText("-");
        RemoveItem.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                RemoveItemMouseClicked(evt);
            }
        });
        RemoveItem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                RemoveItemActionPerformed(evt);
            }
        });

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 14)); // NOI18N
        jLabel1.setText(" DH");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(picturePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(textPrice)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jLabel1)
                        .addGap(35, 35, 35)
                        .addComponent(ItemCount, javax.swing.GroupLayout.PREFERRED_SIZE, 36, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(textName)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(AddItem, javax.swing.GroupLayout.PREFERRED_SIZE, 51, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(RemoveItem, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(40, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(picturePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(textName)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(textPrice)
                            .addComponent(ItemCount, javax.swing.GroupLayout.PREFERRED_SIZE, 22, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 24, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(28, 28, 28)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(AddItem)
                            .addComponent(RemoveItem))))
                .addContainerGap(20, Short.MAX_VALUE))
        );

        ItemCount.getAccessibleContext().setAccessibleDescription("");
    }// </editor-fold>//GEN-END:initComponents

    private void formMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_formMouseClicked

    }//GEN-LAST:event_formMouseClicked

    private void AddItemActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_AddItemActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_AddItemActionPerformed

    private void RemoveItemActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_RemoveItemActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_RemoveItemActionPerformed

    private void AddItemMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_AddItemMouseClicked
        
        RemoveItem.setEnabled(true);
        count += 1;
        for (Product productLine : mainProgram.liOfProducts) {

            //System.out.println("add " + productLine.getProductName());
            //System.out.println("add count " + productLine.getProductCount());

            if (textName.getText() == productLine.getProductName()) {
                //System.out.println("yes found");
                productLine.setProductCount(count);
                if (my_dict.containsKey(productLine.getProductName() + "")){my_dict.replace(productLine.getProductName() + "", productLine.getProductCount() + "");}
                else {my_dict.put(productLine.getProductName() + "", productLine.getProductCount() + "");}
                
                //System.out.println("add count" + productLine.getProductCount());
            }
        }

        ItemCount.setText("x" + count + "");
        mainProgram.MainMenuFrame.panelPrice += Float.parseFloat(this.price);
        mainProgram.MainMenuFrame.panelcounter += 1;

        mainProgram.MainMenuFrame.updatePanel();
        mainProgram.MainMenuFrame.updateItems();// TODO add your handling code here:
        
        
        
    }//GEN-LAST:event_AddItemMouseClicked

    private void RemoveItemMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_RemoveItemMouseClicked
        if (RemoveItem.isEnabled()) {
            count -= 1;

            for (Product productLine : mainProgram.liOfProducts) {
                System.out.println("remove " + productLine.getProductName());
                System.out.println("remove count" + productLine.getProductCount());

                if (textName.getText() == productLine.getProductName()) {
                    productLine.setProductCount(count);
                    my_dict.replace(productLine.getProductName() + "",count+"");
                    System.out.println("remove count" + productLine.getProductCount());
                }

                if (count == 0) {
                    RemoveItem.setEnabled(false);
                }
            }

            ItemCount.setText(count + "");
            mainProgram.MainMenuFrame.panelPrice -= Float.parseFloat(this.price);
            mainProgram.MainMenuFrame.panelcounter -= 1;
            mainProgram.MainMenuFrame.updateItems();// TODO add your handling code here:
            mainProgram.MainMenuFrame.updatePanel();
        }

    }//GEN-LAST:event_RemoveItemMouseClicked

    private void formComponentShown(java.awt.event.ComponentEvent evt) {//GEN-FIRST:event_formComponentShown

    }//GEN-LAST:event_formComponentShown

    private void ItemCountComponentShown(java.awt.event.ComponentEvent evt) {//GEN-FIRST:event_ItemCountComponentShown
        // TODO add your handling code here:
    }//GEN-LAST:event_ItemCountComponentShown


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton AddItem;
    public javax.swing.JLabel ItemCount;
    public javax.swing.JButton RemoveItem;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JPanel picturePanel;
    private javax.swing.JLabel textName;
    private javax.swing.JLabel textPrice;
    // End of variables declaration//GEN-END:variables

}
