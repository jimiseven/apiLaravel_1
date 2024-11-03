<?php

// app/Http/Controllers/DocenteController.php
namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return Docente::all(); // Listar todos los docentes
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email|unique:docentes'
        ]);

        return Docente::create($request->all()); // Crear un nuevo docente
    }

    public function show($id)
    {
        return Docente::findOrFail($id); // Mostrar un docente específico
    }

    public function update(Request $request, $id)
    {
        $docente = Docente::findOrFail($id);
        $docente->update($request->all()); // Actualizar un docente
        return $docente;
    }

    public function destroy($id)
    {
        Docente::destroy($id); // Eliminar un docente
        return response()->noContent();
    }
}
