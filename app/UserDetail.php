<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $fillable = [
        'user_id', 'first_name', 'middle_name', 'last_name', 'profile_pic', 'college_detail_id'
    ];

    public $timestamps = false;
}
