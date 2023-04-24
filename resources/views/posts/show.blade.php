@extends('Diseños.app')

@section('title', 'Inicio')

@section('meta-description', 'Inicio meta description')

@section('content')
    <h1>{{$post->correo}}</h1>
    <a href="/entrada">Regresar</a>
@endsection