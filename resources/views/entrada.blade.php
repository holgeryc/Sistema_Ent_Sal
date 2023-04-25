@extends('Diseños.app')

@section('title', 'Entrada')

@section('meta-description', 'Entrada meta description')

@section('content')
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Entrada</h1>
        <a  class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('posts.formulario')}}">Ingresos</a>

    </header>
    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">

        @foreach($posts as $post)   
        <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
            <h1 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                <a href="{{route('posts.show', $post)}}">
                    {{$post-> Voucher}}
                    <br>
                    {{$post-> Nombre}}<br>
                    {{$post-> Detalle}}<br>
                    {{$post-> Monto}}
                </a>
            </h1> &nbsp;
            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('posts.editar', $post)}}">Editar</a>
        </div>
        @endforeach

    </main>
@endsection