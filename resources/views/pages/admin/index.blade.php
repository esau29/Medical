
@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
    <div style="position: relative; top: 100%; left:36%;">
        <h1 style="color:white; font-size: 32px; color:black;">Bienvenido {{Auth::user()->nombre}}</div>
    </div>
@endsection
