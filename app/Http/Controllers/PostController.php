<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller{
    public function index(){
        return view('post', [
            "title" => "Post",
            "post" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post',[
            "title" => "Single Post",
            "posts" => Post::find($slug)
        ]);
    }
}