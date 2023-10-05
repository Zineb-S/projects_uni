package com.ynov.findmyway

import android.os.Parcel
import android.os.Parcelable.Creator


data class User
    (

    val user_id: Int,
    val user_first_name: String,
    val user_last_name: String,
    val user_email: String,
    val user_password: String,
    val user_role: Int?=null,
    val user_subject: Int?=null,
    val user_choice: Int?=null,
    val user_recommended: Int?=null,
    val user_state: Int?=null

)

