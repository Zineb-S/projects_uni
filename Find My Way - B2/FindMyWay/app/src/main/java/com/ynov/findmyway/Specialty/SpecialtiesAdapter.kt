package com.ynov.findmyway.Specialty

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.ynov.findmyway.R
import com.ynov.findmyway.Student.StudentAdapter

// get all specialties in student home page
// load them in recycler view

class SpecialtiesAdapter (private val speList: List<Specialty>): RecyclerView.Adapter<SpecialtiesAdapter.ViewHolder>(){

    private lateinit var sListener: StudentAdapter.OnItemClickListener

    interface OnItemClickListener {
        fun onItemClick(position: Int)
    }
    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        // inflates the monster_design view
        // that is used to hold list item
        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.specialty_card, parent, false)

        return ViewHolder(view,sListener)
    }
    fun setOnItemClickListener(listener: StudentAdapter.OnItemClickListener) {
        sListener = listener
    }
    // binds the list items to a view
    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
            println(speList)
        // get the data
        val specialty = speList[position]

        // assign the data to the corresponding UI element
        holder.specialtyNameTextView.text = specialty.specialty_name


        val context = holder.specialtyNameTextView.context

    }

    // return the number of the items in the list
    override fun getItemCount(): Int {
        return speList.size
    }

    // Holds the views for adding it to image and text
    class ViewHolder(ItemView: View, sListener: StudentAdapter.OnItemClickListener) : RecyclerView.ViewHolder(ItemView) {
        val specialtyNameTextView = itemView.findViewById<TextView>(R.id.specialtyName)
        init {
            itemView.setOnClickListener {
                sListener.onItemClick(adapterPosition)


            }
    }
}
}