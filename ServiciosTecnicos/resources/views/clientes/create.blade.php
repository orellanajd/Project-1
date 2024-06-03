<!-- resources/views/clientes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Cliente</h1>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_persona">ID Persona:</label>
            <input type="text" class="form-control" id="id_persona" name="IdPersona">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
