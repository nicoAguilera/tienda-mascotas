<label for="name">Nombre: {{$pet->name}}</label>
<input type="text" name="name" value="{{ old('name') }}"><br>

<label for="gender">Sexo: </label>
<input type="radio" name="gender" value="F" checked> F
<input type="radio" name="gender" value="M"> M<br>

<label for="birthday">Fecha de Nacimiento: </label>
<input type="date" name="birthday" value="{{ old('birthday') }}"><br>

<label>Fecha de Muerte: </label>
<input type="date" name="death_date" value="{{ old('death_date') }}"><br>

<label>Observaciones: </label>
<textarea name="observation">{{ old('observation') }}</textarea><br>

<label>Especie: </label>
<select name="species">
    <option>Sin Definir</option>
</select><br><br>