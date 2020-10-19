@extends('provider')

@section('operacion')
    <div class="card bg-success">
        <h3 class="card-header">Agregar Proveedor</h3>
        <div class="card-body">
            <form action="/provider" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" aria-describedby="helpId" placeholder="Apellido Paterno">
                </div>
                <div class="form-group">
                    <label for="apellido_materno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" aria-describedby="helpId" placeholder="Apellido Paterno">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 col-sm-6"><button type="submit" class="btn btn-primary btn-block">Guardar</button></div>
                        <div class="col-12 col-sm-6"><button type="reset" class="btn btn-danger btn-block">Cancelar</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection