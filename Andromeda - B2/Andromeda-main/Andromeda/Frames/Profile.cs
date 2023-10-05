﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Andromeda
{
    public partial class Profile : Form
    {
        public Profile()
        {
            InitializeComponent();
            textBoxUsername.Text = Program.CurrentUserUsername;
            textBoxFirstname.Text = Program.CurrentUserfname;
            textBoxLastname.Text = Program.CurrentUserlname;
            textBoxGender.Text = Program.CurrentUserGender;
            label8.Text = Program.CurrentUserBirth;
            textBoxEmail.Text = Program.CurrentUserEmail;
            label9.Text = String.Concat(Enumerable.Repeat("*", Program.CurrentUserPassword.Length)) ;

        }


        private void label5_Click(object sender, EventArgs e)
        {

        }

        private void Profile_Load(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Dispose();
            Settings settingss = new Settings(Program.CurrentUserUsername, Program.CurrentUserEmail, Program.CurrentUserPassword);
            settingss.Show();
        }

        private void label4_Click(object sender, EventArgs e)
        {

        }

        private void label7_Click(object sender, EventArgs e)
        {

        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            MainMenu mainMenu = new MainMenu();
            mainMenu.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.Hide();
            User.LogOut();
            Welcome logout = new Welcome();
            logout.Show();
        }

        private void textBoxFirstname_Click(object sender, EventArgs e)
        {

        }

        private void button4_Click(object sender, EventArgs e)
        {
            User.DeleteUser();
        }
    }
}
