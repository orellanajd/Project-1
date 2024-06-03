<!-- resources/views/clientes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->IdCliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_persona">ID Persona:</label>
            <input type="text" class="form-control" id="id_persona" name="IdPersona" value="{{ $cliente->IdPersona }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
