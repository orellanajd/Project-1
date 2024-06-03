<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Editar Persona</h1>
    <form action="{{ route('personas.update', $persona->IdPersona) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value="{{ $persona->PrimerNombre }}">
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value="{{ $persona->SegundoNombre }}">
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value="{{ $persona->PrimerApellido }}">
        <label for="SegundoApellido">Segundo Apellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value="{{ $persona->SegundoApellido }}">
        <label for="FechaNacimiento">Fecha de Nacimiento:</label>
        <input type="datetime-local" name="FechaNacimiento" id="FechaNacimiento" value="{{ $persona->FechaNacimiento }}">
        <label for="Sexo">Sexo:</label>
        <select name="Sexo" id="Sexo">
            <option value="M" {{ $persona->Sexo == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ $persona->Sexo == 'F' ? 'selected' : '' }}>Femenino</option>
        </select>
        <label for="Direccion">Dirección:</label>
        <input type="text" name="Direccion" id="Direccion" value="{{ $persona->Direccion }}">
        <label for="Telefono">Teléfono:</label>
        <input type="text" name="Telefono" id="Telefono" value="{{ $persona->Telefono }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
