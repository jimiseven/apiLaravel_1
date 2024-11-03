<?php

// app/Http/Controllers/EstudianteController.php
namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return Estudiante::all(); // Listar todos los estudiantes
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email|unique:estudiantes'
        ]);

        return Estudiante::create($request->all()); // Crear un nuevo estudiante
    }

    public function show($id)
    {
        return Estudiante::findOrFail($id); // Mostrar un estudiante específico
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all()); // Actualizar un estudiante
        return $estudiante;
    }

    public function destroy($id)
    {
        Estudiante::destroy($id); // Eliminar un estudiante
        return response()->noContent();
    }
}
