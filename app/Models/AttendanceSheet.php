<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSheet extends Model
{
    protected $fillable = ['subject_id', 'date'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

