@extends('layouts.app')

@section('content')
<form method="POST" style="margin-left: 35%" action="{{route('consultorios.store')}}">
        <h4><b>Formulario de registro</b></h4>
            <input id="formMethod" name="_method" type="hidden" value="POST">
                <div class="form-group col-md-6">
                <label for="nombre" class="form-label">Nombre del consultorio</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Consultorio" autofocus pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]+" required>
                </div>
                <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección del Consultorio" required>
                </div>
                <div class="form-group col-md-6">
                <label for="descripcion">Correo electronico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo del Consultorio" required>
                </div>
                <br>
            <button type="submit" class="col-md-6 btn btn-primary">Confirmar Registro</button>   
        </form>
@endsection