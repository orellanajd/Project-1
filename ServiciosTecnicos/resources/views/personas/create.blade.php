<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Crear Persona</h1>
    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre">
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre">
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido">
        <label for="SegundoApellido">Segundo Apellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido">
        <label for="FechaNacimiento">Fecha de Nacimiento:</label>
        <input type="datetime-local" name="FechaNacimiento" id="FechaNacimiento">
        <label for="Sexo">Sexo:</label>
        <select name="Sexo" id="Sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <label for="Direccion">Dirección:</label>
        <input type="text" name="Direccion" id="Direccion">
        <label for="Telefono">Teléfono:</label>
        <input type="text" name="Telefono" id="Telefono">
        <button type="submit">Crear</button>
    </form>
</body>
</html>
