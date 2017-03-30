<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    //one to one relationship between school and principal
    public function school(){
        return $this->belongsTo(School::class);
    }
}
