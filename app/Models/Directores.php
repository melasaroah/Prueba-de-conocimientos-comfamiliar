<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peliculas;

class Directores extends Model
{
    use HasFactory;

    protected $table = 'directores';

    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'cedula',
        'telefono',
        'estado'
    ];

    public function peliculas() {
        return $this->hasMany(Peliculas::class, 'id_director', 'id');
    }


}
