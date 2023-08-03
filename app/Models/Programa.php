<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_codigo', 'pro_nombre', 'pro_nivelformacion'
    ];
}


// solicitud de comite
// comite
// faltas
// articulos

// Instructor
// Ficha
// Aprendiz
// Programa


// Arreglando nombres en Comite -> index, show desde el controlador de comite
