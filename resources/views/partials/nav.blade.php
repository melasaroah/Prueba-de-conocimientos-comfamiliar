<nav class="navbar navbar-light shadow-sm " style="padding: 5px 10px 5px 10px" >
    <a class="navbar-brand" href="{{route('pelicula.index')}}"  style="color: #032245">
        {{config('app.name')}}
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item ">
            <a class="nav-link {{request()->routeIs('pelicula.index') ? 'active' : ''}}" href="{{route('pelicula.index')}}">
                Peliculas
            </a>
        </li>

    </ul>
</nav>
