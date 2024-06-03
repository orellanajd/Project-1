<?php

namespace App\Http\Controllers;

use App\Models\TipoTracking;
use Illuminate\Http\Request;

class TipoTrackingController extends Controller
{
    public function index()
    {
        $tiposTracking = TipoTracking::all();
        return response()->json($tiposTracking);
    }

    public function store(Request $request)
    {
        $request->validate([
            'TipoTracking' => 'required|string|max:50',
        ]);

        $tipoTracking = TipoTracking::create($request->all());

        return response()->json($tipoTracking, 201);
    }

    public function show($id)
    {
        $tipoTracking = TipoTracking::findOrFail($id);
        return response()->json($tipoTracking);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TipoTracking' => 'required|string|max:50',
        ]);

        $tipoTracking = TipoTracking::findOrFail($id);
        $tipoTracking->update($request->all());

        return response()->json($tipoTracking);
    }

    public function destroy($id)
    {
        $tipoTracking = TipoTracking::findOrFail($id);
        $tipoTracking->delete();

        return response()->json(null, 204);
    }
}
