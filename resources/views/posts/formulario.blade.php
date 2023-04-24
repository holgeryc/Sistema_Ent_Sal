@extends('Diseños.app')

@section('title', 'Formulario')

@section('meta-description', 'Formulario para ingresar datos')

@section('content')
    <h1>Crar nuevo formulario</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">
            Title <br>
            <input name="title" type="text">
        </label><br>
        <label for="">
            cuerpo<br>
            <textarea name="body">
            </textarea>
        </label><br>
        <button type="submit">
                Enviar
        </button><br>
    </form>
    <a href="/entrada">Regresar</a>
@endsection