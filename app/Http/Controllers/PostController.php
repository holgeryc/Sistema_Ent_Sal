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
        $request->validate([
            'voucher' => ['required'],
            'nombre' => ['required'],
            'detalle' => ['required'],
            'monto' => ['required'],
        ]);
        
        $post= new Post();
        $post->Voucher=$request->voucher;
        $post->Nombre=$request->nombre;
        $post->Detalle=$request->detalle;
        $post->Monto=$request->monto;
        $post->save();
        return $request;
        // return view('posts.store');
    }

    public function editar(Post $post){
        return view('posts.editar', ['post'=>$post]);
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'voucher' => ['required'],
            'nombre' => ['required'],
            'detalle' => ['required'],
            'monto' => ['required'],
        ]);
        
        $post->Voucher=$request->voucher;
        $post->Nombre=$request->nombre;
        $post->Detalle=$request->detalle;
        $post->Monto=$request->monto;
        $post->save();

        session()->flash('status', 'Actualizado');

        return $request;
    }

}