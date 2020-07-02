<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $post = request()->validate([
            'caption'=>'required',
            'image'=>['required','image'],
        ]);
        \App\Post::create($post);
        dd(request()->all());
    }
}
