@extends('provider')

@section('operacion')
    <div class="card bg-success">
        <h3 class="card-header">Agregar Proveedor</h3>
        <div class="card-body">
            {!! Form::open(['action' => 'ProviderController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            <!--<form action="/provider" method="POST">-->
                @csrf
                <div class="form-group">
                  <!--<label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">-->
                  {!! Form::label('nombre', 'Nombre:') !!}
                  {!! Form::text('nombre', '', ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" aria-describedby="helpId" placeholder="Apellido Paterno">-->
                    {!! Form::label('apellido_paterno', 'Apellido Paterno') !!}
                    {!! Form::text('apellido_paterno', '', ['class'=>'form-control', 'placeholder'=>'Apellido Paterno:']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="apellido_materno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" aria-describedby="helpId" placeholder="Apellido Paterno">-->
                    {!! Form::label('apellido_materno', 'Apellido Materno') !!}
                    {!! Form::text('apellido_materno', '', ['class'=>'form-control', 'placeholder'=>'Apellido Materno']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">-->
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                </div>
                <div class="form-group">
                    <!--<label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">-->
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::number('telefono', '', ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                </div>
                <div class="form-group">
                  <!--<label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>-->
                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::textarea('descripcion', '', ['id'=>'descripcion', 'class'=>'form-control', 'placeholder'=>'Descipcion', 'rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', 'Imagen') !!} <br>
                    {!! Form::file('image') !!}
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 col-sm-6">{!! Form::submit('Guardar', ['class'=>'btn btn-block btn-primary']) !!}</div>
                        <div class="col-12 col-sm-6">{!! Form::reset('Cancelar', ['class'=>'btn btn-block btn-danger']) !!}</div>
                    </div>
                </div>
            <!--</form>-->
            {!! Form::close() !!}
        </div>
    </div>
    @if(count($errors))
        <div class="container mt-3">
            <div class="alert alert-danger">
                <h3>Se encontraron algunos errores</h3>
                <ul class="list-style-none">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>                    
                @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection