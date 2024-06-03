<!DOCTYPE html>
<html>
<head>
    <title>Ver Persona</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>{{ $persona->PrimerNombre }} {{ $persona->PrimerApellido }}</h1>
    <p>Segundo Nombre: {{ $persona->SegundoNombre }}</p>
    <p>Segundo Apellido: {{ $persona->SegundoApellido }}</p>
    <p>Fecha de Nacimiento: {{ $persona->FechaNacimiento }}</p>
    <p>Sexo: {{ $persona->Sexo }}</p>
    <p>Dirección: {{ $persona->Direccion }}</p>
    <p>Teléfono: {{ $persona->Telefono }}</p>
    <a href="{{ route('personas.index') }}">Volver</a>
</body>
</html>
