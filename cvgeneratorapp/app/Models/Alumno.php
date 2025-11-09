<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'teléfono',
        'correo',
        'fecha_nacimiento',
        'nota_media',
        'experiencia',
        'formación',
        'habilidades',
        'fotografia',
    ];
}
