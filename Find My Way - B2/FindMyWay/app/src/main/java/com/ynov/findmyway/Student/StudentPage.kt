package com.ynov.findmyway.Student

import android.content.Intent
import android.os.Bundle
import android.view.View
import androidx.appcompat.app.AppCompatActivity
import com.ynov.findmyway.MainActivity
import com.ynov.findmyway.R
import com.ynov.findmyway.Specialty.SpecialtyPage

class StudentPage : AppCompatActivity()  {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.student_home)
        val id = intent.getIntExtra("student_id",0)
        val logoutS: View = findViewById(R.id.logoutStudent)
        logoutS.setOnClickListener {
            val intent = Intent(this@StudentPage, MainActivity::class.java)

            startActivity(intent)
        }
        val start: View = findViewById(R.id.startButton)
        start.setOnClickListener {
            val intent = Intent(this@StudentPage, SpecialtyPage::class.java)
            intent.putExtra("student_id", id)
            startActivity(intent)
        }

    }




}