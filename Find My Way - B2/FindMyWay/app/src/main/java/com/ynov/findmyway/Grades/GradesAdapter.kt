package com.ynov.findmyway.Grades

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.ynov.findmyway.R

class GradesAdapter (private val gra: List<Grade>): RecyclerView.Adapter<GradesAdapter.ViewHolder>() {


    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        // inflates the monster_design view
        // that is used to hold list item
        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.grade_card, parent, false)

        return ViewHolder(view)
    }

    // binds the list items to a view
    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        println(gra)
        // get the data
        val grade = gra[position]

        // assign the data to the corresponding UI element
        holder.subjectNameTextView.text = grade.subject_name
        holder.profNameTextView.text = grade.user_first_name +" "+ grade.user_last_name
        holder.gradeNameTextView.text = grade.grade.toString()
        holder.opinionNameTextView.text = grade.opinion


        val context = holder.subjectNameTextView.context

    }

    // return the number of the items in the list
    override fun getItemCount(): Int {
        return gra.size
    }

    // Holds the views for adding it to image and text
    class ViewHolder(ItemView: View) : RecyclerView.ViewHolder(ItemView) {
        val subjectNameTextView = itemView.findViewById<TextView>(R.id.QuestionNameText)
        val profNameTextView = itemView.findViewById<TextView>(R.id.profNameText)
        val gradeNameTextView = itemView.findViewById<TextView>(R.id.gradeText)
        val opinionNameTextView = itemView.findViewById<TextView>(R.id.AnswerInput)

    }
}
