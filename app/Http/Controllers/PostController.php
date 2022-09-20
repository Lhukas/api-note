<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  
    //
    public function index() {

    $listBlocNote = DB::select("select * from blocNote");

    return view('home', ['listBlocNote' => $listBlocNote ] );

}


    public function show($id) {

        $post = DB::select("select * from posts where id=$id");

        
        return view('notes', 
        [ 
            'article' => $post
        ]);
        }
}
