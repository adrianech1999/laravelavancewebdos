<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable=['nombre', 'apellido_paterno', 'apellido_materno', 'email', 'telefono', 'descripcion'];
}
