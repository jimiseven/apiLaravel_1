<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaDocente extends Model
{
    use HasFactory;

    protected $table = 'materia_docente';

    protected $fillable = ['materia_id', 'docente_id'];
}