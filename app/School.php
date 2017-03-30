<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //one to one relationship between school and principal
    public function principal(){
        return $this->hasOne(Principal::class);
    }
}
