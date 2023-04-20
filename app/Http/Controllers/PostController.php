<?php   

namespace App\Http\Controllers;

class PostController
{
    public function index(){

        $posts=[
            ['title' => 'first post'],
            ['title' => 'second post'],
            ['title' => 'third post'],
            ['title' => 'fourth post'],
        ];
        return view('Entrada', ['posts'=>$posts]);
    }

}