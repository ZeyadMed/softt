<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'code', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function accounts()
    {
    return $this->hasMany(StudentAccount::class);
    }

    public function attendanceSheets()
    {
    return $this->hasMany(AttendanceSheet::class);
    }


}

