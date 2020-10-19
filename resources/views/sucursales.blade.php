@extends('layouts.plantilla')

@section('contenido')
    <div class="container my-2 card bg-secondary text-white">
        <h2 class="card-title mt-4 mb-0">Agregar sucursal</h2>
        <hr class="bg-light">
        <form action="/sucursales/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de sucursal">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Nombre de sucursal">
            </div>
            <div class="form-group">
                <label for="horarios_atencion">Horarios de atencion</label>
                <input type="text" name="horarios_atencion" id="horarios_atencion" class="form-control" placeholder="Nombre de sucursal">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
    <div class="container my-4">
        @if(count($sucursales))
            @foreach($sucursales as $sucursal)
                <address class="card p-5 bg-dark text-white">
                    <h4>Sucursal Nro: {{$sucursal->id}}, {{$sucursal->nombre}}</h4>
                    <p><strong>Direccion: </strong>{{$sucursal->direccion}}</p>
                    <p><strong>Horarios de atencion: </strong>{{$sucursal->horarios_atencion}}</p>
                </address>
            @endforeach
        @else
            <div class="alert alert-danger">No existen sucursales disponibles</div>
        @endif
    </div>
@endsection