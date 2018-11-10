@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        {{$title}}
    </div>

    <form>
    	<label for="name">Nombre: </label><input type="text" name="name"><br>
    	<label for="gender">Sexo: </label><input type="checkbox" name="gender" value="F" checked> F
    	<input type="checkbox" name="gender" value="M"> M<br>
    	<label for="birthday">Fecha de Nacimiento: </label> <input type="date" name="birthday"><br>
    	<label>Fecha de Muerte: </label> <input type="date" name="death_date"><br>
    	<label>Observaciones:</label><textarea></textarea>
    </form>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop