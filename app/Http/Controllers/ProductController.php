<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function show_product(){
        $show = Product::all();
        return view('about', compact('show'));
    }
    public function cart(){
        $session_id = Session::get('session_id');
        $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        $total = 0;
        foreach ($userCart as $key => $product) {
            $productDetails = Product::where('id',$product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
            $total += ($product->price * $product->quantity); 
        }
        return view('products.cart')->with(compact('userCart', 'total'));
    }
   
    
   
}