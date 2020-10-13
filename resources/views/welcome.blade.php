@extends('layouts.plantilla')

@section('contenido')
    <h1>Pagina de inicio, Bienvenido</h1>
    <h3>Lista de articulos</h3>
    @if (count($articulos))
        <ul class="list-group">
            @foreach ($articulos as $cliente)
                <li class="list-group-item">{{$cliente}}</li>
            @endforeach
        </ul>        
    @else
        <p class="alert alert-danger">No existen articulos</p>
    @endif
@endsection