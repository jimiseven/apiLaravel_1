<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'correo'];

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'estudiante_materia');
    }
}