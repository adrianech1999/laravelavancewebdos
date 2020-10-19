@extends('provider')

@section('operacion')
@if($proveedor)
<div class="card bg-secondary text-white">
    <h3 class="card-header">Proveedor</h3>
    <div class="card-body">
        <form action="/provider/{{$proveedor->id}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" value="{{$proveedor->nombre}}">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" aria-describedby="helpId" placeholder="Apellido Paterno" value="{{$proveedor->apellido_paterno}}">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" aria-describedby="helpId" placeholder="Apellido Paterno" value="{{$proveedor->apellido_materno}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email" value="{{$proveedor->email}}">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono" value="{{$proveedor->telefono}}">
            </div>
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{$proveedor->descripcion}}</textarea>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-12 col-sm-6"><button type="submit" class="btn btn-primary btn-block">Modificar</button></div>
                    <div class="col-12 col-sm-6"><a href="/provider" class="btn btn-block btn-dark">Cancelar</a></div>
                </div>
            </div>
        </form>
        <form action="/provider/{{$proveedor->id}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div class="row">
                <div class="col-12">
                    <input type="submit" class="btn btn-danger btn-block" value="Eliminar">
                </div>
            </div>
        </form>
    </div>
</div>
@else
    <div class="alert alert-danger">No existe el registro.</div>
@endif
@endsection