package com.risto.ristomanager.frames;

import com.risto.ristomanager.entities.User;

public class LoginFrame extends javax.swing.JFrame {

    private String input_Password;
    private String input_Email;
    private String Type1 = "Cashier";
    private String Type2 = "Chef";
    public int UserNumber;

    public LoginFrame() {
        initComponents();

    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        Email = new javax.swing.JLabel();
        Password = new javax.swing.JLabel();
        Password_Form = new javax.swing.JPasswordField();
        Email_Form = new javax.swing.JFormattedTextField();
        Enter = new javax.swing.JButton();
        jButton1 = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Log In");

        jLabel1.setFont(new java.awt.Font("Montserrat", 1, 48)); // NOI18N
        jLabel1.setText("Log In");

        Email.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        Email.setText("Email");

        Password.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        Password.setText("Password");

        Password_Form.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                Password_FormActionPerformed(evt);
            }
        });

        Email_Form.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                Email_FormActionPerformed(evt);
            }
        });

        Enter.setBackground(new java.awt.Color(255, 153, 153));
        Enter.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        Enter.setForeground(new java.awt.Color(255, 255, 255));
        Enter.setText("Enter");
        Enter.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                EnterMouseClicked(evt);
            }
        });
        Enter.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                EnterActionPerformed(evt);
            }
        });

        jButton1.setBackground(new java.awt.Color(255, 255, 255));
        jButton1.setFont(new java.awt.Font("Montserrat", 1, 18)); // NOI18N
        jButton1.setForeground(new java.awt.Color(255, 0, 51));
        jButton1.setText("Back");
        jButton1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jButton1MouseClicked(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(62, 62, 62)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addGap(60, 60, 60)
                        .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 142, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(Enter, javax.swing.GroupLayout.PREFERRED_SIZE, 140, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(Email, javax.swing.GroupLayout.PREFERRED_SIZE, 101, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(Password))
                        .addGap(39, 39, 39)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(Email_Form, javax.swing.GroupLayout.PREFERRED_SIZE, 490, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(Password_Form, javax.swing.GroupLayout.PREFERRED_SIZE, 490, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addContainerGap(154, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(348, 348, 348)
                .addComponent(jLabel1)
                .addGap(172, 342, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(43, 43, 43)
                .addComponent(jLabel1)
                .addGap(52, 52, 52)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(Email)
                    .addComponent(Email_Form, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(Password_Form, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(Password))
                .addGap(66, 66, 66)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(Enter, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 54, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(94, Short.MAX_VALUE))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void Password_FormActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_Password_FormActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_Password_FormActionPerformed

    private void Email_FormActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_Email_FormActionPerformed

        // TODO add your handling code here:

    }//GEN-LAST:event_Email_FormActionPerformed

    private void EnterMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_EnterMouseClicked
        // TODO add your handling code here:
        input_Email = Email_Form.getText();
        input_Password = Password_Form.getText();

        try {
            SQLHandler.select("SELECT * FROM users where User_Email='" + input_Email + "' and User_Password='" + input_Password + "'");
            //Cashier1@risto.com

            if (SQLHandler.resultSet.next()) {
                System.out.println("User Found");
                UserNumber = SQLHandler.resultSet.getInt("User_ID");
                System.out.println(UserNumber);

                if (Type1.equals(SQLHandler.resultSet.getString("User_Type"))) {
                    mainProgram.CashierFrame.setVisible(true);
                    mainProgram.account="Cashier";
                    mainProgram.CashierFrame.ID.setText(UserNumber + "");
                    Email_Form.setText("");
                    Password_Form.setText("");
                    this.dispose();

                }
                if (Type2.equals(SQLHandler.resultSet.getString("User_Type"))) {
                    mainProgram.CookFrame.setVisible(true);
                    mainProgram.account="Cook";
                    mainProgram.CookFrame.ID.setText(UserNumber + "");
                    Email_Form.setText("");
                    Password_Form.setText("");
                    this.dispose();
                }

            } else {
                System.out.println("User Not Found");
                Email_Form.setText("");
                Password_Form.setText("");
            }
        } catch (Exception e) {
            System.out.println("Error While Importing Users : " + e.getMessage());
        }

    }//GEN-LAST:event_EnterMouseClicked

    private void EnterActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_EnterActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_EnterActionPerformed

    private void jButton1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jButton1MouseClicked

        mainProgram.ClientAdminFrame.setVisible(true);
        this.dispose();        // TODO add your handling code here:
    }//GEN-LAST:event_jButton1MouseClicked

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
            java.util.logging.Logger.getLogger(LoginFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(LoginFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(LoginFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(LoginFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new LoginFrame().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel Email;
    private javax.swing.JFormattedTextField Email_Form;
    private javax.swing.JButton Enter;
    private javax.swing.JLabel Password;
    private javax.swing.JPasswordField Password_Form;
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel jLabel1;
    // End of variables declaration//GEN-END:variables
}
