<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Directores;
use App\Models\PeliculaActor;
use App\Models\Actores;


class Peliculas extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    protected $fillable = [
        'id',
        'id_director',
        'nombre_pelicula',
        'tipo_pelicula',
        'fecha_realizacion',
        'estado'
    ];

    public function directores() {
        return $this->belongsTo(Directores::class, 'id_director', 'id');
    }

    public function actoresPiv() {
        return $this->belongsToMany(Actores::class, 'pelicula_actor', 'id_pelicula', 'id_actor')
                                    ->as('peli_actor')
                                    ->using(PeliculaActor::class);

    }

    //scopes
    public function scopeNombrePeli($query, $id){
        if($id){
            return $query->where('peliculas.id', $id);
        }
    }



}
