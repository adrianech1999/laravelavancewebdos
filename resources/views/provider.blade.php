@extends('layouts.plantilla')

@section('contenido')
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-12 col-md-3">
                @include('layouts.sidebar')
            </div>
            <div class="col-12 col-md-9">
                @yield('operacion')
            </div>
        </div>
    </div>
@endsection