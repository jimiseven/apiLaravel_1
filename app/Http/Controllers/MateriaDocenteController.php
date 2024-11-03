<?php

// app/Http/Controllers/MateriaDocenteController.php
namespace App\Http\Controllers;

use App\Models\MateriaDocente;
use Illuminate\Http\Request;

class MateriaDocenteController extends Controller
{
    public function index()
    {
        return MateriaDocente::all(); // Listar todas las asignaciones de materias a docentes
    }

    public function store(Request $request)
    {
        $request->validate([
            'materia_id' => 'required|exists:materias,id',
            'docente_id' => 'required|exists:docentes,id'
        ]);

        return MateriaDocente::create($request->all()); // Asignar una materia a un docente
    }

    public function show($id)
    {
        return MateriaDocente::findOrFail($id); // Mostrar una asignación específica
    }

    public function update(Request $request, $id)
    {
        $materiaDocente = MateriaDocente::findOrFail($id);
        $materiaDocente->update($request->all()); // Actualizar una asignación
        return $materiaDocente;
    }

    public function destroy($id)
    {
        MateriaDocente::destroy($id); // Eliminar una asignación
        return response()->noContent();
    }
}

