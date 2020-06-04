<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        // dd($posts);
        return view('posts.index',['posts' =>$posts]);
        //view側でpostsと名前づけられた変数に$postのデータを与える
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        dd($request);
        return view('posts.create');
    }
    public function edit()
    {
        return view('posts.edit'); //editを返す
    }

    public function show()
    {
        return view('posts.show');
    }

}
