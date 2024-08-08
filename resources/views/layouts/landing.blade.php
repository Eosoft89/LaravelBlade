<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')  {{-- Este es un uso típico para, por ejemplo, cargar un estilo concreto para una página que extiende landing
                           los @yield son opcionales, no es necesario indicarlos en cada una de las páginas que extienden --}}

    <title>
        @yield('title') {{-- La clase que extiende la página landing podrá incluir el yield a traves de la función @section--}}
    </title>
</head>
<body>

    @include('layouts._partials.menu') {{--Una página puede incluir partes parciales de código--}}
    @yield('content')

</body>
</html>

@yield('scripts') {{-- Otra estructura típica, se usa para incluir scripts para una págica específica--}}