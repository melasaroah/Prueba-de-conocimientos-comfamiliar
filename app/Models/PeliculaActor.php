<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PeliculaActor extends Model
{
    use HasFactory;

    protected $table = 'pelicula_actor';

    protected $fillable = [
        'id',
        'id_pelicula',
        'id_actor',
        'nombre_pelicula',
        'estado'
    ];
}
