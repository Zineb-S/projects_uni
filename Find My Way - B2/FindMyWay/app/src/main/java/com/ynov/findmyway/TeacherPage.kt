package com.ynov.findmyway

import android.content.Intent
import android.os.Bundle
import android.view.View
import androidx.appcompat.app.AppCompatActivity
import com.ynov.findmyway.Student.students_list

class TeacherPage : AppCompatActivity()  {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        setContentView(R.layout.prof_home)
        val studentL: View = findViewById(R.id.studentsListButton)
        val ID = intent.getIntExtra("subject_id",0)
        println("TeacherPage"+ID)
        studentL.setOnClickListener {
            val intent = Intent(this@TeacherPage, students_list::class.java)
            intent.putExtra("subject_id",ID )
            startActivity(intent)
        }
        val logout: View = findViewById(R.id.logoutProf)
        logout.setOnClickListener {
            val intent = Intent(this@TeacherPage, MainActivity::class.java)

            startActivity(intent)
        }
    }
}