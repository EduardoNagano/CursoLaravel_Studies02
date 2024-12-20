@extends('layouts/main_layout')
@section('content')

    {{-- Comentário de blade --}}

    <p>PHP: <?= $name ?></p>
    <p>PHP2: <?php echo $name ?></p>

    <p>Blade: {{ $name }}</p>

@endsection