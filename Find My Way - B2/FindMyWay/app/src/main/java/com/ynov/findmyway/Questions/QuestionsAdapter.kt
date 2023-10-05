package com.ynov.findmyway.Questions

import android.content.Intent
import android.text.Editable
import android.text.TextWatcher
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import androidx.core.content.ContextCompat.startActivity
import androidx.recyclerview.widget.RecyclerView
import com.ynov.findmyway.R
import com.ynov.findmyway.Result

class QuestionsAdapter (private val Q: List<Question>): RecyclerView.Adapter<QuestionsAdapter.ViewHolder>() {


     var li : ArrayList<String> = ArrayList()
     var liFull : ArrayList<String> = ArrayList()

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        // inflates the monster_design view
        // that is used to hold list item
        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.question_card, parent, false)
        val answer = view.findViewById<EditText>(R.id.AnswerInput)
        val q = view.findViewById<TextView>(R.id.num)
        val sub = view.findViewById<Button>(R.id.submitBtn)
        val h = view.findViewById<TextView>(R.id.Label)

            answer.addTextChangedListener(object : TextWatcher {

            override fun afterTextChanged(s: Editable) {
            liFull.add(li.last())
               // li = ArrayList()
                //println(liFull)
            }

            override fun beforeTextChanged(s: CharSequence, start: Int,
                                           count: Int, after: Int) {
            }

            override fun onTextChanged(s: CharSequence, start: Int,
                                       before: Int, count: Int) {
                //h.setText("Text in EditText : "+s)

                li.add(q.text.toString()+s.toString())


            }
        })

        return ViewHolder(view)
    }

    // binds the list items to a view
    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        println(Q)
        // get the data
        val question = Q[position]


        // assign the data to the corresponding UI element
        holder.Question.text = question.question
        holder.Label.text = "QUESTION "+(position+1).toString()
        holder.num.text = (position+1).toString()//+ "/"+Q.size.toString()


        val context = holder.Question.context

    }

    // return the number of the items in the list
    override fun getItemCount(): Int {
        return Q.size
    }


    // Holds the views for adding it to image and text
    class ViewHolder(ItemView: View) : RecyclerView.ViewHolder(ItemView) {
        val Question = itemView.findViewById<TextView>(R.id.QuestionNameText)
        val Label = itemView.findViewById<TextView>(R.id.Label)
        val num = itemView.findViewById<TextView>(R.id.num)
        val answer = itemView.findViewById<EditText>(R.id.AnswerInput)


        }
    }
