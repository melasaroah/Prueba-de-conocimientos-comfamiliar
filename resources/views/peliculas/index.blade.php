@extends('layout')

@section('title', 'Peliculas Listar')

@section('content')

    <div class="overflow-hidden shadow-xl sm:rounded-lg">
        
        <h1 class="flex justify-center py-3">Listado de peliculas</h1>

        <div class="d-flex justify-content-between align-items-center">

            <form action="">
                @csrf
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nombrePeli" id="">
                    <option value=""  hidden selected>Select Pelicula</option>
                        @foreach($peliculas as $p)
                            <option value="{{$p->id}}">{{$p->nombre_pelicula}}</option>
                        @endforeach
                </select>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buscar</button>
            </form>
        </div>


        <hr>
        <table class="bg-white table-fixed w-full">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="w-20 py-4 ...">ID </th>
                    <th class="w-1/8 py-4 ...">Pelicula </th>
                    <th class="w-1/16 py-4 ...">Director </th>
                    <th class="w-1/16 py-4 ...">Actor </th>
                    <th class="w-1/16 py-4 ...">Fecha de realización </th>
                    <th class="w-1/16 py-4 ...">Tipo de pelicula </th>
                </tr>
            </thead>
            <body>
                @foreach($listadoPelicula as $key=>$peli)
                    <tr>
                        <td class="py-3 px-6">{{ $key+1}}</td>
                        <td>{{ $peli->nombre_pelicula}}</td>
                        <td>{{ $peli->direcNombre}} {{ $peli->direApellido}}</td>
                        <td>{{ $peli->actNombre}} {{ $peli->actApellido}}</td>
                        <td>{{ $peli->fecha_realizacion}}</td>
                        <td>{{ $peli->tipo_pelicula}}</td>
                    </tr>
                    @endforeach
            </body>
        </table>

    </div>

@endsection
