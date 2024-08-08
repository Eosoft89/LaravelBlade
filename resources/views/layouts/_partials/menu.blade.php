<header>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>  {{-- La función route() sirve para indicar rutas sin la necesidad de dar la ruta completa y estática--}}
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>