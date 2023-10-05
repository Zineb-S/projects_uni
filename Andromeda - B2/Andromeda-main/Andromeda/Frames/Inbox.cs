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
    public partial class Inbox : Form
    {
        public Inbox()
        {
            Program.liOfMessages.Clear();
            Message.ImportUserInbox(Program.liOfMessages);
            InitializeComponent();
            flowLayoutPanel1.FlowDirection = FlowDirection.TopDown;
            flowLayoutPanel1.WrapContents = false;
            flowLayoutPanel1.AutoScroll = true;
            flowLayoutPanel1.Controls.Clear();
            if(Program.liOfMessages.Count > 0)
            {
                for (int i = 0; i < Program.liOfMessages.Count; i += 7)
                {
                    flowLayoutPanel1.Controls.Add(new MessageBoxItem(Program.liOfMessages[i + 2].ToString(), Program.liOfMessages[i + 5 ].ToString(), Program.liOfMessages[i + 6].ToString()));
                }
            }
           
            
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            MainMenu mainMenu = new MainMenu();
            mainMenu.Show();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            
        }

        private void flowLayoutPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void Inbox_Load(object sender, EventArgs e)
        {

        }
    }
}
