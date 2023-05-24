<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'code'];

    public function subjects()
    {
    return $this->hasMany(Subject::class);
    }

}


