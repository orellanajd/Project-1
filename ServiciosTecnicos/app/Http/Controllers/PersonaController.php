<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'PrimerNombre' => 'required|max:50',
            'PrimerApellido' => 'required|max:50',
            'SegundoApellido' => 'required|max:50',
            'Sexo' => 'required|in:M,F',
            'Direccion' => 'required|max:255',
            'Telefono' => 'required|max:20'
        ]);

        Persona::create($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona creada exitosamente.');
    }

    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'PrimerNombre' => 'required|max:50',
            'PrimerApellido' => 'required|max:50',
            'SegundoApellido' => 'required|max:50',
            'Sexo' => 'required|in:M,F',
            'Direccion' => 'required|max:255',
            'Telefono' => 'required|max:20'
        ]);

        $persona->update($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
    }
}
