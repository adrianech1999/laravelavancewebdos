<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }

    public function califications(){
        return $this->morphMany('App\Calification', 'calificationable');
    }
}
