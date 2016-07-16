<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeDetail extends Model
{
    //
    protected $fillable = [
        'collegeid', 'college_name', 'logo',
    ];

    public $timestamps = false;
}
