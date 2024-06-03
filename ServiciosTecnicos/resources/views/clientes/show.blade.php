<!-- resources/views/clientes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Cliente</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $cliente->IdCliente }}</td>
            </tr>
            <tr>
                <th>ID Persona</th>
                <td>{{ $cliente->IdPersona }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver al Listado</a>
@endsection
