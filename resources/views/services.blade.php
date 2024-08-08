@extends('layouts.landing')

@section('title', 'Servicios')
    
@section('content')
    
    <h1>Servicios</h1>

    @component('layouts._components.card')  {{-- Una página puede incluir componentes pre definidos --}}
        @slot('title', 'Service 1')
        @slot('content', 'Contenido')    
    @endcomponent

    @component('layouts._components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Contenido 2')    
    @endcomponent
    
@endsection