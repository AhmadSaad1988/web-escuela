<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    //Nombre de la tabla
    protected $table = 'alumnos';

    public function grupos()
    {
        return $this->belongsTo('App\Grupo', 'grupos_id');
    }

    public function padre()
    {
        return $this->belongsTo('App\Padre', 'padres_id');
    }
}
