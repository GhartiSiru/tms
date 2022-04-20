<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_name',
        'gender',
        'phone_num',
        'email',
        'address',
        'nationality',
        'dob'
    ];

}
