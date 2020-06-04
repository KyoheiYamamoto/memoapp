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
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:140',
        ]);

        Post::create($params);
        return redirect()->route('top');

    }
    public function edit()
    {
        return view('posts.edit'); //editを返す
    }

    public function show($post_id)
    {
         $post = Post::findOrFail($post_id);
        // dd($post);

        return view('posts.show',['post'=>$post]);
    }

}
