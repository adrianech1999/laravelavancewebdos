<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='cargos';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
