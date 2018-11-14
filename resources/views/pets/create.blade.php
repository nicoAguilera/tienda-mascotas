@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Nueva Ficha de Mascota
    </div>

    <form method="POST" action="{{ URL::route('pets.store') }}" role="search">
        @csrf

    	@include('pets._form-fields')
    	
    	<input type="hidden" name="discharge_date" value="hoy">
    	
    	<button type="submit">Guardar Ficha</button>
    </form>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop