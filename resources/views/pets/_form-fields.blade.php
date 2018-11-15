<label for="name">Nombre: </label>
<input type="text" name="name" value="{{ old('name') }}"><br>

<label for="gender">Sexo: </label>
<input type="radio" name="gender" value="F" checked> F
<input type="radio" name="gender" value="M"> M<br>

<label for="birthday">Fecha de Nacimiento: </label>
<input type="date" name="birthdate" value="{{ old('birthday') }}"><br>

<label>Fecha de Muerte: </label>
<input type="date" name="death_date" value="{{ old('death_date') }}"><br>

<label>Observaciones: </label>
<textarea name="observation">{{ old('observation') }}</textarea><br>

<label>Especie: </label>
<select name="species_id">
    <option value="1">Sin Definir</option>
    <option value="2">Perro</option>
    <option value="3">Gato</option>
    <option value="4">Ave</option>
</select><br><br>