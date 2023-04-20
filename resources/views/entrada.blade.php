@extends('Diseños.app')

@section('title', 'Entrada')

@section('meta-description', 'Entrada meta description')

@section('content')
    <h1>Entrada</h1>
    @foreach($posts as $post)
        <h1>{{$post-> correo}}</h1>
    @endforeach
@endsection