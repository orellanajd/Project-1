<?php

namespace App\Http\Controllers;

use App\Models\TipoEmpleado;
use Illuminate\Http\Request;

class TipoEmpleadoController extends Controller
{
    public function index()
    {
        $tiposEmpleados = TipoEmpleado::all();
        return response()->json($tiposEmpleados);
    }

    public function store(Request $request)
    {
        $request->validate([
            'TipoEmpleadoDesc' => 'required|string|max:200',
        ]);

        $tipoEmpleado = TipoEmpleado::create($request->all());

        return response()->json($tipoEmpleado, 201);
    }

    public function show($id)
    {
        $tipoEmpleado = TipoEmpleado::findOrFail($id);
        return response()->json($tipoEmpleado);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TipoEmpleadoDesc' => 'required|string|max:200',
        ]);

        $tipoEmpleado = TipoEmpleado::findOrFail($id);
        $tipoEmpleado->update($request->all());

        return response()->json($tipoEmpleado);
    }

    public function destroy($id)
    {
        $tipoEmpleado = TipoEmpleado::findOrFail($id);
        $tipoEmpleado->delete();

        return response()->json(null, 204);
    }
}
