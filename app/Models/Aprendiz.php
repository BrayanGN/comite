<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'apr_identificacion', 'apr_nombres', 'apr_apellidos','apr_email'
        ,'apr_telefono','apr_direccion','apr_fechanacimiento','apr_grupo_fk'
    ];
}
