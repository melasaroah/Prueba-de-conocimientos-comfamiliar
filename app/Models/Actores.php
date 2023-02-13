<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peliculas;

class Actores extends Model
{
    use HasFactory;

    protected $table = 'actores';

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'cedula',
        'telefono',
        'estado'
    ];


    public function pelisPiv() {
        return $this->belongsToMany(Actores::class, 'pelicula_actor', 'id_actor', 'id_pelicula')
                                    ->as('peli_actor')
                                    ->using(PeliculaActor::class);
    }
}
