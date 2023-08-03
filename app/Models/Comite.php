<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;

    protected $fillable = [
        'com_fechasolicitud',
        'com_descripcionsolicitud',
        'com_tipofalta',
        'com_carpetanexos',
        'com_acta',
        'com_estado',
        'com_recomendacion',
        'com_instructorsolicitante_fk',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'com_instructorsolicitante_fk');
    }
}
