<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    public function courses(){
        return $this->hasMany('App\courses');
    }

    use HasFactory; 
}
