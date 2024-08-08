<div style="border: 1px solid black; border-radius: 5px; padding: 10px">
    <h3>{{ $title }}</h3>
    <img src="{{ asset('assets/img/rafa_anarquista.jpg') }}" alt="example" width="128"> {{-- la función asset() es para utilizar recursos estáticos--}}
    <p> {{ $content }} </p>
</div>