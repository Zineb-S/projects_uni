package com.ynov.findmyway.Student

import android.content.Intent
import android.os.Bundle
import android.widget.Button
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.Grades.EditGrades
import com.ynov.findmyway.MainActivity
import com.ynov.findmyway.R
import com.ynov.findmyway.User
import okhttp3.OkHttpClient
import okhttp3.Request
import java.io.IOException

class students_list : AppCompatActivity()  {
    private lateinit var recycler: RecyclerView
    private val client = OkHttpClient()
    private val moshi = Moshi.Builder().build()
    val listType = Types.newParameterizedType(List::class.java, User::class.java)
    val moshiAdapter: JsonAdapter<List<User>> = moshi.adapter(listType)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        setContentView(R.layout.activity_students_list)
        recycler = findViewById<RecyclerView>(R.id.studentsRecycler)
        recycler.layoutManager = LinearLayoutManager(this)
        Thread {
            loadStudents()

        }.start()

    }

    fun loadStudents(){
        val recyclerView = findViewById<RecyclerView>(R.id.studentsRecycler)
        recyclerView.layoutManager = LinearLayoutManager(this)
        //set horizontal orientation
        /*recyclerView.setLayoutManager(
            LinearLayoutManager(
                this,
                LinearLayoutManager.HORIZONTAL,
                true//false
            )
        )*/
        val request = Request.Builder()
            .url("http://192.168.100.127/Users/getStudents.php")
            .build()

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()


            val students = result.toString()
            var studentsList: List<User> = moshiAdapter.fromJson(students) as List<User>
            val stu = StudentAdapter(studentsList)
            val ID = intent.getIntExtra("subject_id",0)
            println("list"+ID)
            stu.setOnItemClickListener(object : StudentAdapter.OnItemClickListener {
                override fun onItemClick(position: Int) {
                    val goToStudentDetails = Intent(this@students_list, student_details::class.java)

                    goToStudentDetails.putExtra("user_id", studentsList[position].user_id)
                    goToStudentDetails.putExtra("user_first_name", studentsList[position].user_first_name)
                    goToStudentDetails.putExtra("user_last_name", studentsList[position].user_last_name)
                    goToStudentDetails.putExtra("user_email", studentsList[position].user_email)
                    goToStudentDetails.putExtra("user_password", studentsList[position].user_password)
                    goToStudentDetails.putExtra("user_role", studentsList[position].user_role)
                    goToStudentDetails.putExtra("user_subject", studentsList[position].user_subject)
                    goToStudentDetails.putExtra("subject_id",ID)
                    goToStudentDetails.putExtra("user_choice", studentsList[position].user_choice)
                    goToStudentDetails.putExtra("user_recommended", studentsList[position].user_recommended)
                    goToStudentDetails.putExtra("user_state", studentsList[position].user_state)

                    startActivity(goToStudentDetails)


                }

            })

            runOnUiThread {
                recyclerView.adapter = stu
            }
        }







    }
}