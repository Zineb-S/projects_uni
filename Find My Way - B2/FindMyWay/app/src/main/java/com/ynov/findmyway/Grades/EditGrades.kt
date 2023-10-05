package com.ynov.findmyway.Grades

import android.content.Intent
import android.os.Bundle
import android.os.StrictMode
import android.os.StrictMode.ThreadPolicy
import android.view.View
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.R
import com.ynov.findmyway.Student.students_list
import okhttp3.FormBody
import okhttp3.OkHttpClient
import okhttp3.Request
import okhttp3.RequestBody
import java.io.IOException


class EditGrades : AppCompatActivity() {


    private val client = OkHttpClient()
    private val moshi = Moshi.Builder().build()
    val listType = Types.newParameterizedType(List::class.java, Grade::class.java)
    val moshiAdapter: JsonAdapter<List<Grade>> = moshi.adapter(listType)
    var ID = 0
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.editgrades)
        val policy = ThreadPolicy.Builder().permitAll().build()
        StrictMode.setThreadPolicy(policy)
        val sub = findViewById<TextView>(R.id.probSubText)
        val gra = findViewById<TextView>(R.id.studentGradeText)
        val app = findViewById<TextView>(R.id.studentAppText)
        val update: View = findViewById(R.id.updateBtn)
        update.setOnClickListener {

            val paramBuilder = FormBody.Builder()


            paramBuilder
                .add("grade_id", ID.toString())
                .add("grade", gra.text.toString())
                .add("opinion", app.text.toString())


            val formBody: RequestBody = paramBuilder.build()
            val request = Request.Builder()
                .url("http://192.168.100.127/Grades/updateGrades.php")
                .post(formBody)
                .build()

            client.newCall(request).execute().use { response ->
                if (!response.isSuccessful) {
                    throw IOException("Unexpected code $response")

                }
                runOnUiThread{
                    val toast = Toast.makeText(applicationContext, "Updated Successfully  ", Toast.LENGTH_LONG)
                    toast.show()
                    val intent = Intent(this@EditGrades, students_list::class.java)
                    startActivity(intent)

                }
            }

        }
        Thread {
            loadEGrades()

        }.start()
    }


    fun loadEGrades(){

        val sub = findViewById<TextView>(R.id.probSubText)
        val gra = findViewById<TextView>(R.id.studentGradeText)
        val app = findViewById<TextView>(R.id.studentAppText)


        val studentID = intent.getIntExtra("student_id",0)
        val subjectID = intent.getIntExtra("subject_id",0)

        //set horizontal orientation
        /*recyclerView.setLayoutManager(
            LinearLayoutManager(
                this,
                LinearLayoutManager.HORIZONTAL,
                true//false
            )
        )*/

        val paramBuilder = FormBody.Builder()


        paramBuilder
            .add("student_id", studentID.toString())
            .add("subject_id", subjectID.toString())


        val formBody: RequestBody = paramBuilder.build()
        val request = Request.Builder()
            .url("http://192.168.100.127/Grades/getStudentGrades.php")
            .post(formBody)
            .build()

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()

            println(result)
            val grades = result.toString()
            var gr: List<Grade> = moshiAdapter.fromJson(grades) as List<Grade>
            for (i in gr )
            { println("   "+subjectID+"   "+i.subject_id)
                if (i.subject_id == subjectID) {
                    ID=i.grade_id
                runOnUiThread {
                sub.text = i.subject_name
                gra.text = i.grade.toString()
                app.text = i.opinion




                    }

                break
                }

            }

        }

    }
}