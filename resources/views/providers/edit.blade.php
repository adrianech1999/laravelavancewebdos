@extends('provider')

@section('operacion')
@if($proveedor)
<div class="card bg-secondary text-white">
    <h3 class="card-header">Proveedor</h3>
    <div class="card-body">
        {!! Form::model($proveedor, ['action'=>['ProviderController@update', $proveedor->id], 'method'=>'put', 'enctype' => 'multipart/form-data']) !!}
        <!--<form action="/provider" method="POST">-->
            @csrf
                <div class="form-group">
                  <!--<label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">-->
                  {!! Form::label('nombre', 'Nombre:') !!}
                  {!! Form::text('nombre', $proveedor->nombre, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" aria-describedby="helpId" placeholder="Apellido Paterno">-->
                    {!! Form::label('apellido_paterno', 'Apellido Paterno') !!}
                    {!! Form::text('apellido_paterno', $proveedor->apellido_paterno, ['class'=>'form-control', 'placeholder'=>'Apellido Paterno:']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="apellido_materno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" aria-describedby="helpId" placeholder="Apellido Paterno">-->
                    {!! Form::label('apellido_materno', 'Apellido Materno') !!}
                    {!! Form::text('apellido_materno', $proveedor->apellido_materno, ['class'=>'form-control', 'placeholder'=>'Apellido Materno']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">-->
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', $proveedor->email, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">-->
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::number('telefono', $proveedor->telefono, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                </div>
                <div class="form-group">
                  <!--<label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>-->
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::textarea('descripcion', $proveedor->descripcion, ['id'=>'descripcion', 'class'=>'form-control', 'placeholder'=>'Descipcion', 'rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Imagen') !!} <br>
                    <input type="file" name="image">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 col-sm-6">{!! Form::submit('Guardar', ['class'=>'btn btn-block btn-primary']) !!}</div>
                        <div class="col-12 col-sm-6">{!! Form::reset('Cancelar', ['class'=>'btn btn-block btn-secondary']) !!}</div>
                    </div>
                </div>
            <!--</form>-->
            {!! Form::close() !!}
        <!--<form action="/provider/" method="POST">-->
        {!! Form::model($proveedor, ['action'=>['ProviderController@destroy', $proveedor->id], 'method'=>'delete']) !!}
            @csrf
            <div class="row">
                <div class="col-12">
                    <!--<input type="submit" class="btn btn-danger btn-block" value="Eliminar">-->
                    {!! Form::submit('Eliminar', ['class'=>'btn btn-block btn-danger']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        <!--</form>-->
    </div>
</div>
@if(count($errors))
<div class="alert alert-danger">
    <h4>Ocurrio un error</h4>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@else
    <div class="alert alert-danger">No existe el registro.</div>
@endif
@endsection