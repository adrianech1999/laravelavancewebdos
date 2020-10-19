<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Model
{
    use SoftDeletes;

    protected $table='sucursales';

    public function articulos(){
        return $this->hasMany('App\Articulo');
    }

    public function califications(){
        return $this->morphMany('App\Calification', 'calificationable');
    }
}
