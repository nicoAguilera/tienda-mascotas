@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Tienda de Mascotas
    </div>

    <div class="links">
        <a href="{{ url('/mascotas') }}">Listado de Mascotas Registradas</a>
    </div>
</div>
@stop