<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directores;
use App\Models\Peliculas;
use App\Models\Actores;
use App\Models\PeliculaActor;
use Illuminate\Support\Facades\Log;
use PDF;

class PeliculasController extends Controller
{
    public function index(Request $request) {

        $peliculas = Peliculas::where('peliculas.estado', '1')->get();


        $listadoPelicula = Peliculas::orderBy('id', 'DESC')->join('directores', 'peliculas.id_director', '=', 'directores.id')
                            ->join('pelicula_actor', 'peliculas.id', '=', 'pelicula_actor.id_pelicula')
                            ->join('actores', 'pelicula_actor.id_actor', '=', 'actores.id')
                            ->select('peliculas.*','directores.nombres as direcNombre', 'directores.apellidos as direApellido',
                                     'actores.nombres as actNombre', 'actores.apellidos as actApellido')
                            ->nombrePeli($request->nombrePeli)->where('peliculas.estado', '1')
                            ->get();

        Log::info( $listadoPelicula);

        return view('peliculas.index', compact('peliculas', 'listadoPelicula'));
    }



}
