<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        
        // $posts = Post::find(1);
        // $tag = Tag::find(1);
        // dd($post->tags);
        // dd($tag->posts);
        
        return view('post.index', compact('posts'));
    }
    // create
    public function create(){
        
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }
    
    // store
    public function store(){
        $data = request()->validate
        ([
            'name' => 'string',
            'post' => 'string',
            'category_id' => '',
        ]);
        // dd($data);
        Post::create($data);
        return redirect()->route('post.index');
    }

    // show
    public function show(Post $post){
        return view('post.show', compact('post'));
    }
    
    // edite
    public function edite(Post $post){
        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }
    
    // update
    public function update(Post $post){
        $data = request()->validate
        ([
            'name' => 'string',
            'post' => 'string',
            'category_id' => '',

        ]);
        $post->update($data);
        return redirect()->route('post.show' , $post->id);

    }
    // destroy
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');

    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}