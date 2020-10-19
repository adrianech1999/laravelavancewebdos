<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calification extends Model
{
    public function calificationable(){
        return $this->morphTo();
    }
}
