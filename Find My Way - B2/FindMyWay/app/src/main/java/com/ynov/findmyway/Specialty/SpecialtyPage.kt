package com.ynov.findmyway.Specialty
import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.squareup.moshi.JsonAdapter
import com.squareup.moshi.Moshi
import com.squareup.moshi.Types
import com.ynov.findmyway.Questions.question_page
import com.ynov.findmyway.R
import com.ynov.findmyway.Student.StudentAdapter
import com.ynov.findmyway.Student.student_details
import okhttp3.OkHttpClient
import okhttp3.Request
import java.io.IOException

class SpecialtyPage : AppCompatActivity()  {

    private lateinit var recycler: RecyclerView
    private val client = OkHttpClient()
    private val moshi = Moshi.Builder().build()
    val listType = Types.newParameterizedType(List::class.java, Specialty::class.java)
    val moshiAdapter: JsonAdapter<List<Specialty>> = moshi.adapter(listType)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        setContentView(R.layout.specialties)
        recycler = findViewById<RecyclerView>(R.id.specialtyRecycler)
        recycler.layoutManager = LinearLayoutManager(this)
        Thread {
            loadSpecialties()

        }.start()
    }


    fun loadSpecialties(){
        val recyclerView = findViewById<RecyclerView>(R.id.specialtyRecycler)
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
            .url("http://192.168.100.127/Specialties/getSpecialties.php")
            .build()
        val id = intent.getIntExtra("student_id",0)

        client.newCall(request).execute().use { response ->
            if (!response.isSuccessful) throw IOException("Unexpected code $response")

            val result = response.body!!.string()


            val specialties = result.toString()
            var spes: List<Specialty> = moshiAdapter.fromJson(specialties) as List<Specialty>
            val specialisations = SpecialtiesAdapter(spes)
            specialisations.setOnItemClickListener(object : StudentAdapter.OnItemClickListener {
                override fun onItemClick(position: Int) {
                    val questionPage = Intent(this@SpecialtyPage, question_page::class.java)
                    questionPage.putExtra("student_id", id)
                    questionPage.putExtra("spe_id", spes[position].specialty_id)
                    questionPage.putExtra("spe_name", spes[position].specialty_name)


                    startActivity(questionPage)


                }

            })
            runOnUiThread {
                recyclerView.adapter = specialisations
            }
        }







}
}