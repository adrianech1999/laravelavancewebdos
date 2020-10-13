<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-danger">
            <a class="navbar-brand text-white" href="/">Tienda Super</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="/acercadenosotros">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="/productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="/sucursales">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid p-0">
            @yield('contenido')
        </div>

        <footer class="container-fluid bg-dark p-5 mt-2 text-white">
            <p>Desarrollado por Adrian Echeverria</p>
        </footer>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>