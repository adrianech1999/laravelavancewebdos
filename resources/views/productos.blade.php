@extends('layouts.plantilla')

@section('contenido')
    <div class="container my-4">
        <div class="jumbotron bg-primary text-white">
            <h1 class="display-3">Tienda Super</h1>
            <p class="lead">Los mejores productos, tecnología de punta</p>
            <hr class="my-2">
            <p>Más información</p>
            <p class="lead">
                <a class="btn btn-danger btn-lg" href="/contacto" role="button">Contacto</a>
            </p>
        </div>
        <div class="container-fluid">
            @if (count($productos))
                <div class="row">
                    @foreach ($productos as $producto)
                        <div class="col-12 col-sm-4">
                            <div class="card bg-danger">
                                <img class="card-img-top w-100" src="https://t3.ftcdn.net/jpg/02/46/13/84/240_F_246138494_J3BjvqqPgou0jVqjknheDyNTKvsKGqXP.jpg" alt="">
                                <div class="card-body text-white">
                                <h4 class="card-title">{{$producto->nombre}}</h4>
                                <p><strong>Precio: </strong>{{$producto->precio}}</p>
                                <p><strong>Pais de origen: </strong>{{$producto->pais_de_origen}}</p>
                                <p><strong>Observaciones: </strong>{{$producto->observaciones}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="alert alert-danger">Por el momento no existen productos.</p>
            @endif
        </div>
    </div>
@endsection