package com.ynov.findmyway

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import com.chaquo.python.PyObject
import com.chaquo.python.Python
import com.chaquo.python.android.AndroidPlatform
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.Grades.EditGrades
import com.ynov.findmyway.Student.StudentPage
import okhttp3.*
import org.json.JSONArray
import org.json.JSONObject
import java.io.IOException
import kotlinx.serialization.Serializable
class MainActivity : AppCompatActivity() {

    private val client = OkHttpClient()

    // moshi
    private val moshi = Moshi.Builder().build()
    val listType = Types.newParameterizedType(List::class.java, User::class.java)
    val moshiAdapter: JsonAdapter<List<User>> = moshi.adapter(listType)

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.login)


        Thread {
            val loginButton = findViewById<Button>(R.id.loginButton)
            loginButton.setOnClickListener {
            validData()
            val intent = Intent(this, MainActivity::class.java)
            startActivity(intent)
            }


        }.start()
    }


    fun loadUsers() {


        val request = Request.Builder()
            .url("http://192.168.100.127/Users/getUsers.php")
            .build()

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()

        }
    }
    fun createSubject(){
        val paramBuilder = FormBody.Builder()


        paramBuilder
                .add("subject_name", "Mathematics")



            val formBody: RequestBody = paramBuilder.build()

            val request = Request.Builder()
                .url("http://192.168.100.127/Subjects/addSubjects.php")
                .post(formBody)
                .build()

            client.newCall(request).enqueue(object : Callback {
                override fun onFailure(call: Call, e: IOException) {
                    e.printStackTrace()
                }

                override fun onResponse(call: Call, response: Response) {
                    response.use {
                        if (!response.isSuccessful) throw IOException("Unexpected code $response")
                        for ((name, value) in response.headers) {
                            println("$name: $value")
                        }

//                        println(response.body!!.string())


                    }
        }
})
        }
    fun deleteSubject()
    {


        val request = Request.Builder()
            .url("http://192.168.100.127/Subjects/deleteSubjects.php?subject_id=9")
            .build()

        client.newCall(request).enqueue(object : Callback {
            override fun onFailure(call: Call, e: IOException) {
                e.printStackTrace()
            }

            override fun onResponse(call: Call, response: Response) {
                response.use {
                    if (!response.isSuccessful) throw IOException("Unexpected code $response")
                    for ((name, value) in response.headers) {
                        println("$name: $value")
                    }

//                    println(response.body!!.string())


                }
            }
        })
    }

    fun validData(){





        val email = findViewById<EditText>(R.id.emailText)
        val password = findViewById<EditText>(R.id.passwordText)


        val paramBuilder = FormBody.Builder()


        paramBuilder
            .add("user_email", email.text.toString())
            .add("user_password",password.text.toString())



        val formBody: RequestBody = paramBuilder.build()

        val request = Request.Builder()
            .url("http://192.168.192.1/validateData.php")
            .post(formBody)
            .build()

        client.newCall(request).enqueue(object : Callback {
            override fun onFailure(call: Call, e: IOException) {
                e.printStackTrace()
                

            }

            override fun onResponse(call: Call, response: Response) {
                response.use {
                    if (!response.isSuccessful) throw IOException("Unexpected code $response")
                    for ((name, value) in response.headers) {
                        println("$name: $value")

                    }



                    val result = response.body!!.string()

                    val Jobject = JSONObject(result)
                    val Jarray = JSONArray()
                    Jarray.put(Jobject)

                    val users = Jarray.toString()
                    var userInfo: List<User> = moshiAdapter.fromJson(users) as List<User>

                     if (userInfo[0].user_role!!.equals(2))
                     {
                         val intent = Intent(this@MainActivity, StudentPage::class.java)
                         intent.putExtra("student_id", userInfo[0].user_id)
                         runOnUiThread{
                             val toast = Toast.makeText(applicationContext, "Welcome Student "+userInfo[0].user_first_name+" "+userInfo[0].user_last_name, Toast.LENGTH_LONG)
                             toast.show()
                         }
                         startActivity(intent)

                     }
                    if (userInfo[0].user_role!!.equals(0))
                    {
                        val intent = Intent(this@MainActivity, TeacherPage::class.java)
                        //intent.putExtra("subject_id", userInfo[0].user_subject)

                        runOnUiThread{
                            val toast = Toast.makeText(applicationContext, "Welcome Admin "+userInfo[0].user_first_name+" "+userInfo[0].user_last_name, Toast.LENGTH_LONG)
                            toast.show()
                        }
                        startActivity(intent)

                     }
                    if (userInfo[0].user_role!!.equals(1))
                    {
                        val intent = Intent(this@MainActivity, TeacherPage::class.java)
                        intent.putExtra("subject_id", userInfo[0].user_subject)
                        runOnUiThread{
                            val toast = Toast.makeText(applicationContext, "Welcome Professor "+userInfo[0].user_first_name+" "+userInfo[0].user_last_name, Toast.LENGTH_LONG)
                            toast.show()
                        }

                        startActivity(intent)

                    }





                }
            }
        })

    }

}