@extends('layouts/main_layout')
@section('content')
    {{-- for --}}
    @for ($i = 0; $i < 5; $i++)
        <h1>{{ $i }}</h1>
    @endfor

    {{-- foreach --}}
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
    @endforeach

    {{-- forelse é um foreach com empty --}}
    @forelse ($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Names está vazio</p>
    @endforelse

    {{-- while --}}
    @while ($indice < 10)
        <p>Índice: {{ $indice }}</p>

        @php
            $indice++;
        @endphp
    @endwhile
@endsection
