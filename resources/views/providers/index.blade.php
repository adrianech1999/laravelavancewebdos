@extends('provider')

@section('operacion')
    @if (count($providers))
        <table class="table w-100">
            <thead class="bg-secondary text-white">
                <tr>
                    <th>Id</th> 
                    <th>Nombre</th> 
                    <th>Apellido Paterno</th> 
                    <th>Apellido Materno</th> 
                    <th>Email</th> 
                    <th>Telefono</th> 
                    <th>Decripcion</th> 
                    <th>Foto</th> 
                    <th></th> 
                </tr>
            </thead>
            <tbody>
                @foreach($providers as $provider)
                {{str_replace('\\', '/', public_path('image\\'.$provider->image))}}
                    <tr>
                        <td>{{$provider->id}}</td>
                        <td>{{$provider->nombre}}</td>
                        <td>{{$provider->apellido_paterno}}</td>
                        <td>{{$provider->apellido_materno}}</td>
                        <td>{{$provider->email}}</td>
                        <td>{{$provider->telefono}}</td>
                        <td>{{$provider->descripcion}}</td>
                    <td class="d-flex justify-content-center align-items-center"><img class="w-100" src="image/{{$provider->image}}"> </td>
                        <td><a href="/provider/{{$provider->id}}/edit" class="btn btn-primary">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger">No existen proveedores registrados</div>
    @endif
@endsection