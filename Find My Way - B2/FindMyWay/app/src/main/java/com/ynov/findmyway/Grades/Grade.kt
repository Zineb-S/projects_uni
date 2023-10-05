package com.ynov.findmyway.Grades

data class Grade(

    val grade_id : Int,
    val grade : Int,
    val student_id : Int,
    val user_first_name: String,
    val user_last_name: String,
    val subject_id : Int,
    val subject_name : String,
    val opinion : String?=null
)
