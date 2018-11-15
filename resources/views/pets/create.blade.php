@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Nueva Ficha de Mascota
    </div>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ URL::route('pets.store') }}" role="search">
        @csrf

    	@include('pets._form-fields')
    	
    	<input type="hidden" name="discharge_date" value="{{ $today }}">
    	
    	<button type="submit">Guardar Ficha</button>
    </form>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop