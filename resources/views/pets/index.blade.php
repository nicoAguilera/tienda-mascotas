@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        {{$title}}
    </div>
    <section>
    	<table>
    		<tr>
    			<td>Nombre</td>
    			<td>Sexo</td>
    			<td>Fecha de Nacimiento</td>
    			<td>Fecha de Muerte</td>
    			<td>Fecha de Alta</td>
    			<td>Observaciones</td>
    			<td>Especie</td>
    			<td>Editar Ficha</td>
    		</tr>
            @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->gender }}</td>
                    <td>{{ $pet->birthdate }}</td>
                    <td>{{ $pet->death_date }}</td>
                    <td>{{ $pet->discharge_date }}</td>
                    <td>{{ $pet->observation }}</td>
                    <td>{{ $pet->species->name }}</td>
                    <td><button>Editar</button></td>
                </tr>
            @endforeach
        </table>
    </section>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.create') }}">Agregar Ficha Mascota</a>
    </div>
</div>
@stop