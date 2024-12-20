@extends('layouts/main_layout')
@section('content')
    {{-- usando o continue e break --}}
    @for ($i = 0; $i < 10; $i++)

        {{-- continue --}}
        @if ($i == 5)
            @continue
        @endif

        <p>Index: {{ $i }}</p>

        {{-- break --}}
        @if ($i == 7)
            @break
        @endif
    @endfor

    {{-- loop variable --}}
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
        <h3>{{ $loop->index }}</h3>

        @if ($loop->first)
            <h3>Primeira cidade</h3>
        @endif

        @if ($loop->last)
            <h3>Última cidade</h3>
        @endif
    @endforeach
@endsection
