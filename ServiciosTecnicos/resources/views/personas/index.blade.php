<!DOCTYPE html>
<html>
<head>
    <title>Personas</title>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #0056b3;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 10px;
        }

        li:hover {
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .action-links {
            margin-top: 10px;
        }

        .action-links a {
            margin-right: 10px;
        }

        form {
            display: inline;
            margin: 0;
        }

        button {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Personas</h1>
    <a href="{{ route('personas.create') }}">Crear nueva persona</a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <ul>
        @foreach ($personas as $persona)
            <li>
                <a href="{{ route('personas.show', $persona->IdPersona) }}">{{ $persona->PrimerNombre }} {{ $persona->PrimerApellido }}</a>
                <div class="action-links">
                    <a href="{{ route('personas.edit', $persona->IdPersona) }}">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->IdPersona) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
