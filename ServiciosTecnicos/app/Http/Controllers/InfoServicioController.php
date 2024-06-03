<?php

namespace App\Http\Controllers;

use App\Models\InfoServicio;
use Illuminate\Http\Request;

class InfoServicioController extends Controller
{
    public function index()
    {
        $infoservicios = InfoServicio::all();
        return response()->json($infoservicios);
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdServicio' => 'nullable|integer|exists:servicio,IdServicio',
            'Solucion' => 'required|string|max:255',
        ]);

        $infoservicio = InfoServicio::create($request->all());

        return response()->json($infoservicio, 201);
    }

    public function show($id)
    {
        $infoservicio = InfoServicio::findOrFail($id);
        return response()->json($infoservicio);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdServicio' => 'nullable|integer|exists:servicio,IdServicio',
            'Solucion' => 'required|string|max:255',
        ]);

        $infoservicio = InfoServicio::findOrFail($id);
        $infoservicio->update($request->all());

        return response()->json($infoservicio);
    }

    public function destroy($id)
    {
        $infoservicio = InfoServicio::findOrFail($id);
        $infoservicio->delete();

        return response()->json(null, 204);
    }
}
