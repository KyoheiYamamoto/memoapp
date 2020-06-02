<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index'); //posts/index.blade,phpを表示
    }
    public function show()
    {
        return view('posts.show');
    }
}
