<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'student_id'];

    public function account()
    {
        return $this->hasOne(StudentAccount::class);
    }
}

