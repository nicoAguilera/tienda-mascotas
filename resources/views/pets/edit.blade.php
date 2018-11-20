@extends('master')

@section('content')
<div class="">
    <div class="title m-b-md">
        Editar Ficha de Mascota
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

    <form method="POST" action="{{ URL::route('pets.update', [$pet->id]) }}" role="search">
        @method('PATCH')
        @csrf
    	
        <label for="name">Nombre: </label>
        <input type="text" name="name" value="{{ old('name', $pet->name) }}"><br>

        <label for="gender">Sexo: </label>
        @if($pet->gender === 'F')
        <input type="radio" name="gender" value="F" checked> F
        <input type="radio" name="gender" value="M"> M<br>
        @else
        <input type="radio" name="gender" value="F"> F
        <input type="radio" name="gender" value="M" checked> M<br>
        @endif

        <label for="birthday">Fecha de Nacimiento: </label>
        <input type="date" name="birthdate" value="{{ old('birthdate', date_format(date_create($pet->birthdate), 'Y-m-d')) }}"><br>

        <label>Fecha de Muerte: </label>
        <input type="date" name="death_date" value="{{ old('death_date', date_format(date_create($pet->death_date), 'Y-m-d')) }}"><br>

        <label>Observaciones: </label>
        <textarea name="observation">{{ old('observation', $pet->observation) }}</textarea><br>

        <label>Especie: </label>
        <select name="species_id">
            @if($pet->species_id == "1")
            <option value="1" selected>
            @else
            <option value="1">
            @endif
            Sin Definir</option>
            
            @if($pet->species_id == "2")
            <option value="2" selected>
            @else
            <option value="2">
            @endif
            Perro</option>

            @if($pet->species_id == "3")
            <option value="3" selected>
            @else
            <option value="3">
            @endif
            Gato</option>
            
            @if($pet->species_id == "4")
            <option value="4" selected>
            @else
            <option value="4">
            @endif
            Ave</option>
        </select><br><br>

        <input type="hidden" name="discharge_date" value="{{ date_format(date_create($pet->discharge_date), 'Y-m-d') }}">

        <button type="submit">Actualizar Ficha</button>
    </form>

    <div class="links content" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.index') }}">Consultar Listado de Mascotas</a>
    </div>
</div>
@stop