<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdTipoEmpleado' => 'nullable|integer|exists:tipo_empleado,IdTipoEmpleado',
            'IdPersona' => 'nullable|integer|exists:persona,IdPersona',
        ]);

        $empleado = Empleado::create($request->all());

        return response()->json($empleado, 201);
    }

    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return response()->json($empleado);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdTipoEmpleado' => 'nullable|integer|exists:tipo_empleado,IdTipoEmpleado',
            'IdPersona' => 'nullable|integer|exists:persona,IdPersona',
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());

        return response()->json($empleado);
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return response()->json(null, 204);
    }
}
