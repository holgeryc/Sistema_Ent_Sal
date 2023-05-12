@extends('Diseños.app')

@section('title', 'Formulario')

@section('meta-description', 'Formulario para ingresar datos')

@section('content')
    
    
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Crear nuevo formulario</h1>
    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('posts.storeE')}}" method="POST">
    
        @csrf
        <label for="">
            Fecha <br><input name="fecha" type="date" value="{{old('fecha')}}">
            @error('fecha')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Voucher <br><input name="voucher" type="text" value="{{old('voucher')}}">
            @error('voucher')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Nombre <br><input name="nombre" type="text" value="{{old('nombre')}}">
            @error('nombre')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Detalle <br><input name="detalle" type="text" value="{{old('detalle')}}">
            @error('detalle')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Entrada <br><input name="entrada" type="float" value="{{old('entrada')}}">
            @error('entrada')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>
        
        <div class="flex items-center justify-between mt-4">

            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">
            Enviar 
            </button><br>
    
            <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="/entrada">Regresar</a>
        </div>
    </form>
@endsection



