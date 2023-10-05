package com.ynov.findmyway.Questions

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.Toast
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.chaquo.python.PyObject
import com.chaquo.python.Python
import com.chaquo.python.android.AndroidPlatform
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.Grades.Grade
import com.ynov.findmyway.Grades.GradesAdapter
import com.ynov.findmyway.R
import com.ynov.findmyway.Result
import okhttp3.FormBody
import okhttp3.OkHttpClient
import okhttp3.Request
import okhttp3.RequestBody
import java.io.IOException

class question_page : AppCompatActivity() {

    private val client = OkHttpClient()
    private val moshi = Moshi.Builder().build()
   lateinit var speQuestions : QuestionsAdapter
   lateinit var avg : String
    val listType = Types.newParameterizedType(List::class.java, Question::class.java)
    val moshiAdapter: JsonAdapter<List<Question>> = moshi.adapter(listType)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_question_page)
        val id = intent.getIntExtra("student_id",0)
        val spe_id = intent.getIntExtra("spe_id",0)
        val spe_name = intent.getStringExtra("spe_name",)

        val sub: View = findViewById(R.id.submitBtn)

        sub.setOnClickListener {

            val intent = Intent(this@question_page, Result::class.java)
            intent.putExtra("result",speQuestions.liFull)
            intent.putExtra("student_id",id)
            intent.putExtra("avg",avg)
            intent.putExtra("spe_id",spe_id)
            intent.putExtra("spe_name",spe_name)

            startActivity(intent)


        }
        Thread {

            loadQuestions()
            getAverage(id)


        }.start()
    }
    fun getAverage(id: Int) {

        val paramBuilder = FormBody.Builder()


        paramBuilder
            .add("student_id", id.toString())
        val formBody: RequestBody = paramBuilder.build()
        val request = Request.Builder()
            .url("http://192.168.100.127/Grades/avg.php")
            .post(formBody)
            .build()

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()

            avg = result
          }

    }
    fun matchAnswers(){

    }
    fun loadQuestions(){



        val id = intent.getIntExtra("spe_id",0)
        val recyclerView = findViewById<RecyclerView>(R.id.QuestionsRecycler)
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
            .add("specialty_id", id.toString())
        val formBody: RequestBody = paramBuilder.build()
        val request = Request.Builder()
            .url("http://192.168.100.127/Questions/getQuestions.php")
            .post(formBody)
            .build()

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()

            println(result)
            val questions = result.toString()
            var Q: List<Question> = moshiAdapter.fromJson(questions) as List<Question>
            speQuestions = QuestionsAdapter(Q)

            runOnUiThread {
                recyclerView.adapter = speQuestions
            }
        }

    }

}