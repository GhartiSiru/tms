<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'faculty_name',
        'description',
        'status'
    ];

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'id');
    }
}
