<?php
// app/Http/Controllers/EstudianteMateriaController.php
namespace App\Http\Controllers;

use App\Models\EstudianteMateria;
use Illuminate\Http\Request;

class EstudianteMateriaController extends Controller
{
    public function index()
    {
        return EstudianteMateria::all(); // Listar todas las inscripciones de estudiantes en materias
    }

    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'materia_id' => 'required|exists:materias,id'
        ]);

        return EstudianteMateria::create($request->all()); // Inscribir un estudiante en una materia
    }

    public function show($id)
    {
        return EstudianteMateria::findOrFail($id); // Mostrar una inscripción específica
    }

    public function update(Request $request, $id)
    {
        $estudianteMateria = EstudianteMateria::findOrFail($id);
        $estudianteMateria->update($request->all()); // Actualizar una inscripción
        return $estudianteMateria;
    }

    public function destroy($id)
    {
        EstudianteMateria::destroy($id); // Eliminar una inscripción
        return response()->noContent();
    }
}
