package com.ynov.findmyway.Grades

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
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

class studentGrades : AppCompatActivity() {

    private val client = OkHttpClient()
    private val moshi = Moshi.Builder().build()
    val listType = Types.newParameterizedType(List::class.java, Grade::class.java)
    val moshiAdapter: JsonAdapter<List<Grade>> = moshi.adapter(listType)


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_student_grades)
        val exit: View = findViewById(R.id.backToStudentDetailsBtn)
        exit.setOnClickListener {
            val intent = Intent(this@studentGrades, students_list::class.java)
            startActivity(intent)


        }
        Thread {
            loadGrades()

        }.start()

    }

    fun loadGrades(){
        val id = intent.getIntExtra("student_id",0)
        val recyclerView = findViewById<RecyclerView>(R.id.GradesRecycler)
        recyclerView.layoutManager = LinearLayoutManager(this)
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
            .add("student_id", id.toString())
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
            val studentGrades = GradesAdapter(gr)
            runOnUiThread {
                recyclerView.adapter = studentGrades
            }
        }

}
}