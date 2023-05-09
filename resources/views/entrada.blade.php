@extends('Diseños.app')

@section('title', 'Entrada')

@section('meta-description', 'Entrada meta description')

@section('content')
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Entrada</h1>
        <a  class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('posts.formulario')}}">Ingresos</a>

    </header>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">	 
        <link rel="stylesheet" href="style.css">  
    </head>
    <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
        <div class="bg-green-400 bg-opacity-100 text-gray-100 text-center"><p class="text-xl">Datatables - Tailwind CSS</p></div>			
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">			 				
				<table id="posts" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                        <tr class="bg-indigo-400 bg-opacity-100 text-white">
                            <th data-priority="1">Voucher</th>
                            <!-- <th data-priority="2">N° Voucher</th>
                            <th data-priority="3">N° Cheque</th>
                            <th data-priority="4">C/P</th>
                            <th data-priority="5">Nombres y Apellidos</th>
                            <th data-priority="6">Detalle</th> -->
                            <th data-priority="7">Entrada</th>
                            <th data-priority="8">Salida</th>
                            <th data-priority="9">Monto</th>
                            <th data-priority="10"></th>
                            
                        </tr>
                        
					</thead>
                        
					<tbody>
                        @foreach($posts as $post)   
                        <tr>
                            
            
                                <!-- <td>{{$post-> Fecha}}</td> -->
                                <td>{{$post-> Voucher}}</td>
                                <!-- <td>{{$post-> Cheque}}</td>
                                <td>{{$post-> CP}}</td>
                                <td>{{$post-> Nombre}}</td>
                                <td>{{$post-> Detalle}}</td> -->
                                <td>{{$post-> Entrada}}</td>
                                <td>{{$post-> Salida}}</td>
                                <td>{{$post-> Monto}}</td>
                                <td><a style="color : red " class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('posts.editar', $post)}}">Editar</a></td>

                            
                        </tr>
                        
                        @endforeach
					</tbody>					
				</table>				
			</div>	
      </div>
    
    <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>		
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    
@endsection