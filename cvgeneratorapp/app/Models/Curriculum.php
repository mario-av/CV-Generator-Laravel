<?php
// app/Models/Curriculum.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_image',
        'nombre',
        'apellidos',
        'direccion',
        'telefono',
        'email',
        'fecha_nacimiento',
        'permiso_conducir',
        'descripcion_personal',
        'experiencia',
        'educacion',
        'idiomas',
        'actitudes',
        'aptitudes',
        'habilidades_complementarias',
    ];
}