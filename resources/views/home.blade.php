@extends('layouts/main_layout')
@section('content')
    @production
        <p>Estou em ambiente de produção.</p>
    @else
        <p>Não estou em produção.</p>
        <p>{{ $value }}</p>
    @endproduction

    @env('local', 'development')
    <p>Estou no ambiente: {{ env('APP_ENV') }}</p>
    @endenv

    {{-- formulário --}}
    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name">
            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="text" name="country">
            @error('country')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Enviar</button>

    </form>
@endsection
