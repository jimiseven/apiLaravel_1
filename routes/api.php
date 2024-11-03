<?php

use Illuminate\Support\Facades\Route;

// Aquí puedes definir las rutas de tu API
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaDocenteController;
use App\Http\Controllers\EstudianteMateriaController;

Route::apiResource('docentes', DocenteController::class);
Route::apiResource('materias', MateriaController::class);
Route::apiResource('estudiantes', EstudianteController::class);
Route::apiResource('materia-docente', MateriaDocenteController::class);
Route::apiResource('estudiante-materia', EstudianteMateriaController::class);
