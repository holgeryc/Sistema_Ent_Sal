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

    public function formulario(){

        return view('posts.formulario');
        //  ['post'=>$post]);
    }

    public function store(Request $request){
        $resultado='';
        $request->validate([
            'voucher' => ['required'],
            'entrada' => ['required'],
            'salida' => ['required'],
        ]);
        
        $resultado= ($request->entrada)+($request->salida);
        $post= new Post();
        $post->Voucher=$request->voucher;
        $post->Entrada=$request->entrada;
        $post->Salida=$request->salida;
        $post->Monto=$resultado;
        $post->save();
        session()->flash('status', 'Datos creados');
        return $request;
        // return view('posts.store');
    }

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