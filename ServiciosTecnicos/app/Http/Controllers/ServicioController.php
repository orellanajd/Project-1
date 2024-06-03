<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return response()->json($servicios);
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdCliente' => 'nullable|integer|exists:cliente,IdCliente',
            'IdEmpleado' => 'nullable|integer|exists:empleado,IdEmpleado',
            'IdEquipo' => 'nullable|integer|exists:equipo,IdEquipo',
        ]);

        $servicio = Servicio::create($request->all());

        return response()->json($servicio, 201);
    }

    public function show($id)
    {
        $servicio = Servicio::findOrFail($id);
        return response()->json($servicio);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdCliente' => 'nullable|integer|exists:cliente,IdCliente',
            'IdEmpleado' => 'nullable|integer|exists:empleado,IdEmpleado',
            'IdEquipo' => 'nullable|integer|exists:equipo,IdEquipo',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());

        return response()->json($servicio);
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return response()->json(null, 204);
    }
}
