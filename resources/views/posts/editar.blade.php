@extends('Diseños.app')

@section('title', '$post->title')

@section('meta-description', 'Editar meta description')

@section('content')
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Editar Formulario</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        <label for="">
            Voucher <br><input name="voucher" type="text" value="{{old('voucher', $post->Voucher)}}">
            @error('voucher')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Entrada <br><input name="entrada" type="double" value="{{old('entrada', $post->Entrada)}}">
            @error('entrada')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Salida <br><input name="salida" type="double" value="{{old('salida', $post->Salida)}}">
            @error('salida')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>

        <label for="">
            Monto <br><input name="monto" type="double"  value="{{old('monto', $post->Monto)}}"disabled>
            @error('monto')
                <br>
                <small style="color : red ">{{$message}}</small>
            @enderror
        </label><br>
        
        <div class="flex items-center justify-between mt-4">

            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">
            Enviar 
            </button>
    
            <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="/entrada">Regresar</a>
        </div>
    </form>

@endsection