@extends('Diseños.app')

@section('title', 'Entrada')

@section('meta-description', 'Entrada meta description')

@section('content')
    <h1>Entrada</h1>
    <a href="{{route('posts.formulario')}}">Ingresos</a>
    @foreach($posts as $post)
        <h1>
            <a href="{{route('posts.show', $post)}}">
                {{$post-> correo}}
            </a>
        </h1>
    @endforeach
@endsection