<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{

    public function courses(){
        return $this->hasOne('App\courses','id','course_id');
    }

    use HasFactory;
}
