package com.ynov.findmyway.Student

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.TextView
import com.ynov.findmyway.Grades.EditGrades
import com.ynov.findmyway.Grades.studentGrades
import com.ynov.findmyway.R

class student_details : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_student_details)

        val name = findViewById<TextView>(R.id.studentNameLabel)
        val student_id = intent.getIntExtra("user_id",0)

        val Edit: View = findViewById(R.id.editGradeButton)
        val ID = intent.getIntExtra("subject_id",0)
        println("details"+ID)
        Edit.setOnClickListener {
            val intent = Intent(this@student_details, EditGrades::class.java)
            intent.putExtra("student_id", student_id)
            intent.putExtra("subject_id", ID)
            startActivity(intent)

        }
        val ViewGrades: View = findViewById(R.id.ViewGradesButton)
        ViewGrades.setOnClickListener {
            val intent = Intent(this@student_details, studentGrades::class.java)
            intent.putExtra("student_id", student_id)
            startActivity(intent)
        }
        val SLB: View = findViewById(R.id.studentsListBtn)
        SLB.setOnClickListener {
            val intent = Intent(this@student_details, students_list::class.java)
            startActivity(intent)
        }
        val nameT = intent.getStringExtra("user_first_name")+" "+intent.getStringExtra("user_last_name")
        name.text = nameT

    }


}