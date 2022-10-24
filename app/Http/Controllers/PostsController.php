<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data=request()->validate(
            [
                'caption' => 'required',
                'image' => ['required','image'],
            ]
            );

        
        \App\Models\Post::create($data);
        dd(request()->all());
    }
}
