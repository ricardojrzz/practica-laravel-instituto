<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    // Añade estas líneas:
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
    ];
}
