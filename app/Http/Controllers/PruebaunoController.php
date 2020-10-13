<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaunoController extends Controller
{
    //
    function posts($id){
        return 'Este es el post nro.' . $id;
    }
}
