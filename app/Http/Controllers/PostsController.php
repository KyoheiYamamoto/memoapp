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


    public function show($post_id)
    {
         $post = Post::findOrFail($post_id);
        // dd($post);

        return view('posts.show',['post'=>$post]);
    }
    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);

        return view('posts.edit',['post'=>$post]); //editを返す
    }
    public function update($post_id,Request $request)
    {
        // dd($request);
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:140',
        ]);
        // dd($params);
        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();

        return redirect()->route('posts.show',['post'=>$post]);
    }
    public function destroy($post_id)
    {
        // dd($post_id);
        $post = Post::findOrFail($post_id);
        \DB::transaction(function() use ($post){
            $post->delete();
        });
        return redirect()->route('top');
    }
}
