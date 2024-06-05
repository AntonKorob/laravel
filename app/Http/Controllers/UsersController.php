<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // подключаем фасад DB


class UsersController extends Controller
{
    public function shownew(){
        
        // DB::table('posts')->where('id', '!=', 3)->dump();
        
        // table post
        $posts = DB::table('posts')->get();
        // table city
        $city = DB::table('city')->get();
        //table countrie
        $countries = DB::table('countries')->get();
        
        return view('post', 
        [
            'posts' => $posts ,
            'city' => $city, 
            'countries' => $countries
        ]);
        
        // ==========================================
        // $posts = DB::table('posts')->get();
        // foreach($posts as $post){
        //     dump($post->name);
        //     dump($post->post);
        // }
        
        // $city = DB::table('city')->get();
        // foreach($city as $elem){
        //     dump($elem->city);
        //     dump($elem->description);
        // }
        // $countries = DB::table('countries')->get();
        // foreach($countries as $val){
        //     dump($val->country);
        //     dump($val->description);
        // }
    }
    
    // =========================================
    public function show(){
        return view('test.test', ['var1' => '1', 'var2' => '2', 'var3' => '3']);
    }
    public function show1(){
        return view('test.test', ['var1' => '1', 'var2' => '2', 'var3' => '3']);
    }
    public function show2(){
        return view('test.test2', ['name' => 'Foo', 'surname' => 'Bar']);
    }
}