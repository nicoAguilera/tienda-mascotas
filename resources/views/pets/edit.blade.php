@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Editar Ficha de Mascota
    </div>

    <form method="POST" action="{{ URL::route('pets.update', [$pet->id]) }}" role="search">
        @method('PATCH')
        @csrf
    	
        @include('pets._form-fields')

        <button type="submit">Actualizar Ficha</button>
    </form>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop