<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=Provider::all();
        return view('providers.index')->with('providers', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoProveedor=new Provider();
        $nuevoProveedor->nombre=$request->nombre;
        $nuevoProveedor->apellido_paterno=$request->apellido_paterno;
        $nuevoProveedor->apellido_materno=$request->apellido_materno;
        $nuevoProveedor->telefono=$request->telefono;
        $nuevoProveedor->email=$request->email;
        $nuevoProveedor->descripcion=$request->descripcion;
        $res = $nuevoProveedor->save();
        return redirect('/provider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=Provider::find($id);
        return view('providers.show')->with('proveedor', $proveedor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor=Provider::find($id);
        return view('providers.edit')->with('proveedor', $proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor=Provider::find($id);
        $proveedor->update($request->all());
        return redirect('/provider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=Provider::find($id);
        $proveedor->delete();
        return redirect('/provider');
    }
}
