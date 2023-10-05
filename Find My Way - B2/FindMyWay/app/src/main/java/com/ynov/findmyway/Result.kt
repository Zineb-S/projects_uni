package com.ynov.findmyway

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.chaquo.python.PyObject
import com.chaquo.python.Python
import com.chaquo.python.android.AndroidPlatform
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.Specialty.Specialty
import com.ynov.findmyway.Student.students_list
import okhttp3.*
import org.json.JSONArray
import org.json.JSONObject
import java.io.IOException
import kotlin.properties.Delegates

class Result : AppCompatActivity() {

    private var criteria1 :Int =0 // answers
    private var criteria2 :Int=0 // average
    private var criteria3 :Int = 0 // reviews
    private val client = OkHttpClient()
    private val li : ArrayList<String> = ArrayList()
    private val txt :String = String()
    private val moshi = Moshi.Builder().build()
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        setContentView(R.layout.way_found)

        val h = intent.getStringArrayListExtra("result")
        val avg = intent.getStringExtra("avg")

        if (h != null) {
            for (item in h.indices) {

                // printing array elements having even index only
                if(item+1<h.size)
                {
                if (h[item].get(0)!=h[item+1].get(0))
                    li.add(h[item].substring(1))
            }
                else{li.add(h[item].substring(1))}
            }
        }

       Thread{
            reviews(li,avg!!)

        }.start()
    }


    fun reviews(li : ArrayList<String>,avg : String){

        var associate : Int = 0


        val id = intent.getIntExtra("student_id",0)


        val request = Request.Builder()
            .url("http://63df-196-74-207-41.ngrok.io/?id="+id.toString())
            .build()

        val response = client.newCall(request).execute()

        var result = response.body!!.string()
        if (result[0] == '1' || result[0] == '2')
        {
            criteria3 = 1
        }
        else{
            criteria3 =0
        }

        // change average
        if (avg.substring(1) > 10.toString())
        {
        criteria2 = 1
        }
        else {
            criteria2 = 0
        }


        val paramBuilder = FormBody.Builder()

        val speID = intent.getIntExtra("spe_id",0)
        val speName = intent.getStringExtra("spe_name")
        paramBuilder
            .add("specialty_id", speID.toString())



        val formBody: RequestBody = paramBuilder.build()

        val request2 = Request.Builder()
            .url("http://192.168.100.127/Questions/getAnswers.php")
            .post(formBody)
            .build()

        val response2 = client.newCall(request2).execute()
        val result2 = response2.body!!.string()
        val moshi = Moshi.Builder().build()
        val listType = Types.newParameterizedType(List::class.java, answer::class.java)
        val moshiAdapter: JsonAdapter<ArrayList<answer>> = moshi.adapter(listType)

        val Jarray = JSONArray(result2)

        val answers = Jarray.toString()
        var answer: ArrayList<answer> = moshiAdapter.fromJson(answers) as ArrayList<answer>
        var k = 0
        val h = intent.getStringArrayListExtra("result")
        for (i in 0 until answer.size)
        {

            if (h != null) {
                for (item in h.indices) {

                    if(h[item].get(0).code.equals(i-1))
                    {
                        if (answer[i].answer!!.contains(h[item].substring(1)))
                        {
                            println(answer[i].answer!!)
                            println(h[item].substring(1))

                            k+=1
                        }
                    }

                }
            }



        }


        val res = findViewById<TextView>(R.id.resultLabel)
        println("correct answers : $k")
        if (k>=5){
            criteria1 = 1
        }
        else{
            criteria1 = 0
        }
        println("1 :" +criteria1+" 2 :"+criteria2+" 3 :"+criteria3)
        if (criteria1+criteria2+criteria3 >= 2)
        {
            runOnUiThread{
                res.text = speName+" !!! :) "
            }

        }
        else
        {
            runOnUiThread{
                res.text = "NOT "+speName+" :("
            }
        }

    }
    }