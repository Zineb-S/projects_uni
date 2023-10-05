package com.ynov.findmyway.Student

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.ynov.findmyway.R
import com.ynov.findmyway.User


class StudentAdapter (private val studentList: List<User>): RecyclerView.Adapter<StudentAdapter.ViewHolder>(){

    private lateinit var sListener: OnItemClickListener

    interface OnItemClickListener {
        fun onItemClick(position: Int)
    }
    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        // inflates the monster_design view
        // that is used to hold list item

        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.student_card, parent, false)

        return ViewHolder(view,sListener)
    }

    fun setOnItemClickListener(listener: OnItemClickListener) {
        sListener = listener
    }
    // binds the list items to a view
    override fun onBindViewHolder(holder: ViewHolder, position: Int) {


        // get the data
        val student = studentList[position]


        holder.studentNameTextView.text = student.user_first_name.uppercase() + " "+ student.user_last_name.uppercase()


        val context = holder.studentNameTextView.context
    }

    // return the number of the items in the list
    override fun getItemCount(): Int {
        return studentList.size
    }

    // Holds the views for adding it to image and text
    class ViewHolder(ItemView: View, sListener: OnItemClickListener) : RecyclerView.ViewHolder(ItemView) {


        val studentNameTextView = itemView.findViewById<TextView>(R.id.QuestionNameText)

        init {
            itemView.setOnClickListener {
                sListener.onItemClick(adapterPosition)


            }


    }
    }
}