@extends('master')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Listado de Mascotas
    </div>
    <section>
    	<table>
    		<tr>
    			<td>Nombre</td>
    			<td>Sexo</td>
    			<td>Fecha de Nacimiento</td>
                <td>Edad</td>
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
                    <td>{{ date_format(date_create($pet->birthdate), 'd-m-Y') }}</td>
                    <td>{{ date_create()->diff(date_create($pet->birthdate))->y }}</td>
                    <td>{{ date_format(date_create($pet->death_date), 'd-m-Y') }}</td>
                    <td>{{ date_format(date_create($pet->discharge_date), 'd-m-Y') }}</td>
                    <td>{{ $pet->observation }}</td>
                    <td>{{ $pet->species->name }}</td>
                    <td><a href="{{ URL::route('pets.edit', [$pet->id]) }}">Editar Ficha</a></td>
                </tr>
            @endforeach
        </table>
    </section>

    <div class="links" style="padding-top: 50px;">
        <a href="{{ URL::route('pets.create') }}">Agregar Ficha Mascota</a>
    </div>
</div>
@stop