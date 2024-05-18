<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        
        return view('post.index', compact('posts'));
    }
    // create
    public function create(){
        return view('post.create');
    }
    
    public function store(){
        $data = request()->validate
        ([
            'name' => 'string',
            'post' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }
    // show
    public function show(Post $post){
        return view('post.show', compact('post'));
    }
    
    public function edite(Post $post){
        return view('post.edit', compact('post'));
    }
    // update
    public function update(Post $post){
        $data = request()->validate
        ([
            'name' => 'string',
            'post' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show' , $post->id);

    }
    // destroy
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');

    }
}