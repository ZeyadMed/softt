<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAccount extends Model
{
    protected $fillable = ['username', 'password', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

