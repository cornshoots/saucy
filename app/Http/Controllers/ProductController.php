<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //

    public function search(Request $request){
        // $movies = Movie::all();
        $search = $request->input('search');
        $products = Product::where('productname', 'like', "%$search%")->orderByDesc('productname')->get();
        return view('layouts/home', compact('products'));
    }

    public function showInShop(){
        $products = Product::all();
        return view('layouts/shoplayout', compact('products'));
    }

    public function showProduct($productid){
        $products = Product::where('product_id','=', $productid)->get();
        return view('layouts/productpagelayout', compact('products'));
    }
}
