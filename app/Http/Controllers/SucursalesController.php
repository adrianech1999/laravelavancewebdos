<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = Sucursal::all();
        return view('sucursales')->with('sucursales', $data);
    }

    public function create(){
        $sucursal=new Sucursal();
        $sucursal->nombre=request('nombre');
        $sucursal->direccion=request('direccion');
        $sucursal->horarios_atencion=request('horarios_atencion');
        $sucursal->save();
    }

    public function update(){
        Sucursal::where('id', 1)
                    ->update(['nombre'=>'Sur']);
    }

    public function delete(){
        Sucursal::where('id', 1)
                    ->delete();
    }

    public function show(){
        $data=Sucursal::withTrashed()->get();
        return view('sucursales')->with('sucursales', $data);
    }
}
