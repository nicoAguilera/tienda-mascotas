@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        {{$title}}
    </div>

    <form>

    	@include('pets._form-fields')
    	
    	<input type="hidden" name="discharge_date" value="2018-11-12">
    	
    	<button type="submit">Actualizar Ficha</button>
    </form>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop