﻿using Andromeda.Frames;
using MySql.Data.MySqlClient;
using System;
using System.Collections;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Andromeda
{
    internal class Page
    {
        
        /*
        public int PageID { get; set; }
        public string PageName { get; set; }

        public DateTime PageDate { get; set; }
        public string PageType { get; set; }

        public DateTime StartDate { get; set; }

        public DateTime EndDate { get; set; }



        public Page() { }
        public Page(int ID, string name, DateTime date, string type, DateTime SDate, DateTime Etime) {
            this.PageID = ID;
            this.PageName = name;
            this.PageDate = date;
            this.PageType = type;
            this.StartDate = SDate;
            this.EndDate = Etime;
        }
        */
        public static void importPages(ArrayList pagesList)
        {

            DB db = new DB();


            MySqlDataAdapter adapter = new MySqlDataAdapter();
            DataTable table = new DataTable();
            MySqlCommand command = new MySqlCommand("SELECT * FROM `page` ", db.getConnection());

            adapter.SelectCommand = command;
            adapter.Fill(table);

           
            foreach (DataRow dr in table.Rows)
            {
                object[] arr = dr.ItemArray;
                for (int i = 0; i < arr.Length; i++)
                {
                    pagesList.Add(Convert.ToString(arr[i]));
                    
                }
            }
            
        }
        public static void exportPages(string Title) 
        {

            if (Title.Equals(""))
            {
                MessageBox.Show(" Please make sure to fill the whole form !");

                AddPage.ActiveForm.Hide();
                AddPage NewPage = new AddPage();
                NewPage.Show();

            }
            else 
            {
                DB db = new DB();

                MySqlCommand command = new MySqlCommand("INSERT INTO page(Page_Name,Page_Date,Page_Type ,Start_Date) VALUES(@name, @date, @type,@startdate)", db.getConnection());
                MySqlCommand command2 = new MySqlCommand("INSERT INTO profile_page(Page_ID,User_ID) VALUES(@pageID, @ID)", db.getConnection());
                DateTime now = DateTime.Now;
                command.Parameters.Add("@name", MySqlDbType.VarChar).Value = Title;
                command.Parameters.Add("@date", MySqlDbType.DateTime).Value = now;
                command.Parameters.Add("@type", MySqlDbType.VarChar).Value = "Page";
                command.Parameters.Add("@startdate", MySqlDbType.DateTime).Value = now;
                //open the connection
                db.openConnection();
                command.ExecuteNonQuery();
                importPages(Program.liOfPages);
                int index = Convert.ToInt32(Program.liOfPages.Count) - 6;

                string PageID = Program.liOfPages[index].ToString();
                Console.WriteLine(PageID);
                command2.Parameters.Add("@ID", MySqlDbType.Int32).Value = Program.CurrentUserID;
                command2.Parameters.Add("@pageID", MySqlDbType.Int32).Value = Int32.Parse(PageID);



                command2.ExecuteNonQuery();
                db.closeConnection();
                MessageBox.Show("Page Added");
            }
           

        }
        public static void deletePage(string ID) 
        {

            DB db = new DB();

            MySqlCommand command = new MySqlCommand("DELETE FROM profile_page WHERE Page_ID='" + Convert.ToInt32(ID) + "' and User_ID='" + Program.CurrentUserID + "' ", db.getConnection());
            MySqlCommand command2 = new MySqlCommand("DELETE FROM page WHERE Page_ID ='" + Convert.ToInt32(ID) + "'", db.getConnection());


            //open the connection
            db.openConnection();
            command.ExecuteNonQuery();
            command2.ExecuteNonQuery();
            db.closeConnection();   
            MessageBox.Show(" Page succefully Deleted ");
        }
        public static void updatePage(string ID,string Title)
        
        {

            if (Title.Equals(""))
            {
                MessageBox.Show(" Please make sure to fill the whole form !");

                EditPage.ActiveForm.Hide();
                EditPage NewPost = new EditPage(Title);
                NewPost.Show();

            }
            else
            {
                DB db = new DB();

                MySqlCommand command = new MySqlCommand("UPDATE page SET Page_Name=@title WHERE Page_ID= '" + Convert.ToInt32(ID) + "'", db.getConnection());
                command.Parameters.Add("@title", MySqlDbType.VarChar).Value = Title;
                //open the connection
                db.openConnection();
                command.ExecuteNonQuery();
                db.closeConnection();
                MessageBox.Show(" Page succefully Edited ");
            }
        }
        public static void importUserPages(ArrayList userPagesList)
        {
            DB db = new DB();


            MySqlDataAdapter adapter = new MySqlDataAdapter();
            DataTable table = new DataTable();
            MySqlCommand command = new MySqlCommand("SELECT * FROM `profile_page` WHERE User_ID	='" + Program.CurrentUserID + "'", db.getConnection());

            adapter.SelectCommand = command;
            adapter.Fill(table);

            foreach (DataRow dr in table.Rows)
            {
                object[] arr = dr.ItemArray;
                for (int i = 0; i < arr.Length; i++)
                {
                    userPagesList.Add(Convert.ToString(arr[i]));


                }
            }

        }
        public static void CreateProfilePage()
        {
            bool found = false;

            for (var i = 0; i < Program.liOfUserPages.Count; i += 2)
            {

                for (var j = 0; j < Program.liOfPages.Count; j++)
                {

                    if (Program.liOfUserPages[i].ToString().Equals(Program.liOfPages[j].ToString()))
                    {

                        if (Program.liOfPages[j + 1].ToString().Equals("Profile"))
                        {
                            Program.CurrentUserProfileID = Convert.ToInt32(Program.liOfUserPages[i]);
                            found = true;
                            break;

                        }


                    }
                }
            }


            if (!found)
            {
                //Create profile page

                DB db = new DB();
                MySqlCommand command = new MySqlCommand("INSERT INTO page(Page_Name,Page_Date,Page_Type ,Start_Date) VALUES(@name, @date, @type,@startdate)", db.getConnection());
                MySqlCommand command2 = new MySqlCommand("INSERT INTO profile_page(Page_ID,User_ID) VALUES(@pageID, @ID)", db.getConnection());

                DateTime now = DateTime.Now;
                command.Parameters.Add("@name", MySqlDbType.VarChar).Value = "Profile";
                command.Parameters.Add("@date", MySqlDbType.DateTime).Value = now;
                command.Parameters.Add("@type", MySqlDbType.VarChar).Value = "Profile";
                command.Parameters.Add("@startdate", MySqlDbType.DateTime).Value = now;




                //open the connection
                db.openConnection();


                command.ExecuteNonQuery();
                Console.WriteLine("Profile page created ");



                //close connection

                importPages(Program.liOfPages);
                int index = Convert.ToInt32(Program.liOfPages.Count) - 6;

                string PageID = Program.liOfPages[index].ToString();
                Console.WriteLine(PageID);
                command2.Parameters.Add("@ID", MySqlDbType.Int32).Value = Program.CurrentUserID;
                command2.Parameters.Add("@pageID", MySqlDbType.Int32).Value = Int32.Parse(PageID);



                command2.ExecuteNonQuery();
                Console.WriteLine("info profile page added ");



                //close connection
                db.closeConnection();



            }
        }
        public static void importNormalPages(ArrayList pagesList)
        {

            DB db = new DB();


            MySqlDataAdapter adapter = new MySqlDataAdapter();
            DataTable table = new DataTable();
            MySqlCommand command = new MySqlCommand("SELECT * FROM `page` P INNER JOIN profile_page PI on PI.Page_ID=P.Page_ID WHERE Page_Type='Page' and User_ID='" + Program.CurrentUserID + "'", db.getConnection());

            adapter.SelectCommand = command;
            adapter.Fill(table);

            foreach (DataRow dr in table.Rows)
            {
                object[] arr = dr.ItemArray;
                for (int i = 0; i < arr.Length; i++)
                {
                    pagesList.Add(Convert.ToString(arr[i]));
                }
            }

        }

    }

}
