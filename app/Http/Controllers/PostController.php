<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index(){

        $posts= DB::table('Login')->get();
        return view('Entrada', ['posts'=>$posts]);
    }

}