<?php

// app/Http/Controllers/MateriaController.php
namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        return Materia::all(); // Listar todas las materias
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'horas' => 'required|integer'
        ]);

        return Materia::create($request->all()); // Crear una nueva materia
    }

    public function show($id)
    {
        return Materia::findOrFail($id); // Mostrar una materia específica
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all()); // Actualizar una materia
        return $materia;
    }

    public function destroy($id)
    {
        Materia::destroy($id); // Eliminar una materia
        return response()->noContent();
    }
}
