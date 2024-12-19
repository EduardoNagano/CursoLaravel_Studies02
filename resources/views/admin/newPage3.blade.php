@extends('layouts/main_layout')
@section('content')
    
    <h1>PHP1: <?= $name ?></h1>
    <h1>PHP2: <?php echo $name ?></h1>
    <br>
    <h1>{{ $name }}</h1>
    <h3>{{ $phone }}</h3>

@endsection