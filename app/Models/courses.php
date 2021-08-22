<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{

    public function instructor(){
        return $this->hasOne('App\Admin','id','instructor');
    }
    public function content(){
        return $this->hasMany('App\Contents');
    }

    use HasFactory;
}
