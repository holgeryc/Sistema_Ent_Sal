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
        
        $post= new Post();
        $post->correo=$request->title;
        $post->save();
        return $request;
        // return view('posts.store');
    }

}