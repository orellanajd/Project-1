<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/clientes.css') }}">
</head>
<body>

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Listado de Clientes</h1>
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear Nuevo</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Persona</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->IdCliente }}</td>
                            <td>{{ $cliente->persona->nombre }}</td> <!-- Asumiendo que tienes una relación con el modelo Persona -->
                            <td>
                                <a href="{{ route('clientes.show', $cliente->IdCliente) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente->IdCliente) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->IdCliente) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

</body>
</html>
