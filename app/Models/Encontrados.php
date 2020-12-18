<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encontrados extends Model
{
    use HasFactory;
    protected $fillable = [
        'contacto',
        'titulo',
        'especie',
        'raza',
        'sexo',
        'edad',
        'descripcion',
        'ubicacion',
    ];

}
