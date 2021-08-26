@extends('layouts.app')

@section('content')
<!---- <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet"> ----->
<div style="position: relative; top: 10%; text-align: center">
    <h2>Consultorios</h2>
</div>
<a href="{{route('consultorios.create')}}" class="btn btn-info" style="position: fixed; bottom: 40px; right:40px; font-size: 24px;">Agregar</a>
<h3 class="text-center" style="color:white"><b>Lista De Hoteles</b></h3>
    <br>
    @if( count($lista)>0)
        <div class="row" style="text-align:center;">
            <div class="col-4">
                <h5><b>Nombre</b></h5>
            </div>
            <div class="col-4">
                <h5><b>Dirección</b></h5>
            </div> 
            <div class="col-4">
                <h5><b>Correo</b></h5>
            </div>        
        </div>
        @foreach ($lista as $consultorio)
        <div class="row">
            <div class="col-4">
                <p class="text-center"> {{$consultorio->nombreconsultorio}} </p>
            </div>
            <div class="col-4">
                <p class="text-center"> {{$consultorio->direccion}} </p>
            </div>
            <div class="col-4">
                <p class="text-center"> {{$consultorio->email}} </p>
            </div>     
        </div>
        @endforeach
    @else
        <p style="text-align:center;">No existen registros de consultorios</p>
    @endif
@endsection