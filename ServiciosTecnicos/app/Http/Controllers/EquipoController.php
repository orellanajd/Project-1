<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return response()->json($equipos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdTipoEquipo' => 'nullable|integer|exists:tipo_equipo,IdTipoEquipo',
            'Estado' => 'required|string|max:255',
        ]);

        $equipo = Equipo::create($request->all());

        return response()->json($equipo, 201);
    }

    public function show($id)
    {
        $equipo = Equipo::findOrFail($id);
        return response()->json($equipo);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdTipoEquipo' => 'nullable|integer|exists:tipo_equipo,IdTipoEquipo',
            'Estado' => 'required|string|max:255',
        ]);

        $equipo = Equipo::findOrFail($id);
        $equipo->update($request->all());

        return response()->json($equipo);
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return response()->json(null, 204);
    }
}
