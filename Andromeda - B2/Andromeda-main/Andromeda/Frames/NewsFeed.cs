﻿using Andromeda.Entities;
using MySql.Data.MySqlClient;
using System;
using System.Collections;
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
    public partial class NewsFeed : Form
    {
        public NewsFeed()
        {
            Program.liOfReceivedRequests.Clear();
            Program.liOfPosts.Clear();
            Program.PreviousPage = "NewsFeed";

            InitializeComponent();
            flowLayoutPanel1.FlowDirection = FlowDirection.TopDown;
            flowLayoutPanel1.WrapContents = false;
            flowLayoutPanel1.AutoScroll = true;
            flowLayoutPanel1.Controls.Clear();
            Request.ImportRequests(Program.liOfRequests, Program.liOfReceivedRequests);
            Post.importPosts(Program.liOfPosts);
            ArrayList li = new ArrayList();
            for (int i = 0; i < Program.liOfReceivedRequests.Count; i += 6)
            {
                int val = Convert.ToInt32(Program.liOfReceivedRequests[i + 5]);
                if (val == 1)
                {
                    li.Add(Convert.ToInt32(Program.liOfReceivedRequests[i + 1]));
                    li.Add(Program.liOfReceivedRequests[i + 2].ToString());

                }
            }

            for (int i = 0; i < Program.liOfPosts.Count; i += 7)
            {
                if (li.Contains(Convert.ToInt32(Program.liOfPosts[i + 6])))
                {
                    for (int j = 0; j < li.Count; j += 2)
                    {
                        if (Convert.ToInt32(li[j]) == Convert.ToInt32(Program.liOfPosts[i + 6]))
                        {
                            Program.OP = li[j + 1].ToString();
                        }

                    }


                    Program.VotesList.Clear();
                    Vote.ImportPostVotes(Convert.ToInt32(Program.liOfPosts[i]), Program.VotesList);

                    if (Program.VotesList.Count / 6 == 1)
                    {

                        for (int j = 0; j < Program.VotesList.Count; j += 6)
                        {


                            flowLayoutPanel1.Controls.Add(new PostBox(Convert.ToInt32(Program.liOfPosts[i]), Program.liOfPosts[i + 1].ToString(), Program.liOfPosts[i + 2].ToString(), Program.liOfPosts[i + 3].ToString(), Program.VotesList[j + 2].ToString(), Program.VotesList[j + 3].ToString(), Convert.ToInt32(Program.VotesList[j + 4]), Convert.ToInt32(Program.VotesList[j + 5])));
                        }
                    }
                    else
                    {



                        flowLayoutPanel1.Controls.Add(new PostBox(Convert.ToInt32(Program.liOfPosts[i]), Program.liOfPosts[i + 1].ToString(), Program.liOfPosts[i + 2].ToString(), Program.liOfPosts[i + 3].ToString(), "0", "0", 0, 0));

                    }

                }
            }

            ArrayList arrayList = new ArrayList();
            MySqlConnection connection = new MySqlConnection("server=localhost;port=3306;username=root;password=;database=andromeda");


            DB db = new DB();


            MySqlDataAdapter adapter = new MySqlDataAdapter();
            DataTable table = new DataTable();
            MySqlCommand command = new MySqlCommand("SELECT pi.Post_ID,pg.Page_Name,  p.Post_Title, p.Post_Date, p.Post_Content from `post_informations` pi inner join post p ON p.Post_ID = pi.Post_ID INNER JOIN page pg ON pg.Page_ID = pi.Page_ID where pi.page_id IN ( SELECT Page_id FROM group_members where user_id = 1)", db.getConnection());

            adapter.SelectCommand = command;
            adapter.Fill(table);

            foreach (DataRow dr in table.Rows)
            {
                object[] arr = dr.ItemArray;
                for (int i = 0; i < arr.Length; i++)
                {
                    arrayList.Add(Convert.ToString(arr[i]));
                }
            }

            for (int i = 0; i < arrayList.Count; i += 5)
            {

                Program.VotesList.Clear();
                Vote.ImportPostVotes(Convert.ToInt32(arrayList[i]), Program.VotesList);

                if (Program.VotesList.Count / 6 == 1)
                {

                    for (int j = 0; j < Program.VotesList.Count; j += 6)
                    {

                        Program.OP = arrayList[i + 1].ToString();
                        flowLayoutPanel1.Controls.Add(new PostBox(Convert.ToInt32(arrayList[i]), arrayList[i + 2].ToString(), arrayList[i + 3].ToString(), arrayList[i + 4].ToString(), Program.VotesList[j + 2].ToString(), Program.VotesList[j + 3].ToString(), Convert.ToInt32(Program.VotesList[j + 4]), Convert.ToInt32(Program.VotesList[j + 5])));
                    }
                }
                else
                {


                    Program.OP = arrayList[i + 1].ToString();
                    flowLayoutPanel1.Controls.Add(new PostBox(Convert.ToInt32(arrayList[i]), arrayList[i + 2].ToString(), arrayList[i + 3].ToString(), arrayList[i + 4].ToString(), "0", "0", 0, 0));

                }

            }
        }
    
        private void button2_Click(object sender, EventArgs e)
        {
            this.Hide();
            MainMenu mainMenu = new MainMenu();
            mainMenu.Show();
        }

        private void NewsFeed_Load(object sender, EventArgs e)
        {

        }

        private void flowLayoutPanel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
