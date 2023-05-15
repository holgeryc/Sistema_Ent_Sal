<?php   

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){

        $posts= Post::get();
        return view('Entrada', ['posts'=>$posts]);
    }

    public function show(Post $post){

        return view('posts.show', ['post'=>$post]);
    }

    public function formularioE(){

        return view('posts.formularioE');
    }

    public function formularioS(){

        return view('posts.formularioS');
    }

    public function store(Request $request){
        
        $anterior = Post::latest()->first();
        echo $anterior->Monto;
        $valor=floatval($anterior->Monto);
        $resultado='';
        $request->validate([
            'fecha' => ['required'],
            'nombre' => ['required'],
            'detalle' => ['required'],
        ]);
        if (is_null($request->voucher)) {
            $resultado = $valor- $request->salida ;
            // $resultado= ($request->entrada)+($request->salida);
            $post= new Post();
            $post->Fecha=$request->fecha;
            $post->Cheque=$request->cheque;
            $post->CP=$request->cp;
            $post->Nombre=$request->nombre;
            $post->Detalle=$request->detalle;
            $post->Salida=$request->salida;
            $post->Monto=$resultado;
            $post->save();
            session()->flash('status', 'Datos creados');
            return $request;
        } else {
            $resultado = $valor+ $request->entrada ;
            
            $post= new Post();
            $post->Fecha=$request->fecha;
            $post->Voucher=$request->voucher;
            $post->Nombre=$request->nombre;
            $post->Detalle=$request->detalle;
            $post->Entrada=$request->entrada;
            $post->Monto=$resultado;
            $post->save();
            session()->flash('status', 'Datos creados');
            return $request;

        
        
        
    }
}
    // public function storeS(Request $request){
        
    //     // $dato=Post::find(1);
    //     $anterior = Post::latest()->first();
    //     echo $anterior->Monto;
    //     $valor=floatval($anterior->Monto);
    //     $resultado='';
    //     $request->validate([
    //         'fecha' => ['required'],
    //         'nombre' => ['required'],
    //         'detalle' => ['required'],
    //     ]);
        
        
    //     $resultado = $valor- $request->salida ;
        
        
    //     // $resultado= ($request->entrada)+($request->salida);
    //     $post= new Post();
    //     $post->Fecha=$request->fecha;
    //     $post->Cheque=$request->cheque;
    //     $post->CP=$request->cp;
    //     $post->Nombre=$request->nombre;
    //     $post->Detalle=$request->detalle;
    //     $post->Salida=$request->salida;
    //     $post->Monto=$resultado;
    //     $post->save();
    //     session()->flash('status', 'Datos creados');
    //     return $request;
    // }

    public function editar(Post $post){
        return view('posts.editar', ['post'=>$post]);
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'voucher' => ['required'],
            'entrada' => ['required'],
            'salida' => ['required'],
        ]);
        
        $post->Voucher=$request->voucher;
        $post->Entrada=$request->entrada;
        // $post->Salida=$request->salida;
        $post->Monto=$request->monto;
        $post->save();

        session()->flash('status', 'Actualizado');

        return $request;
    }

    public function Sumar(Request $request){
        // var valor_1=$request->entrada;
        // var valor_2=$request->salida;

        // var resultado=valor_1+valor_2;
        
    }

}