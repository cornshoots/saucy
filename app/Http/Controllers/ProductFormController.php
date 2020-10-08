<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductFormController extends Controller
{
    //
    public function create(){
        return view("layouts/products/create");
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required|unique:movies|min:4|max:100',
            'description' => 'required|min:10'
        ]);

        $product = Product::create($input);


        return redirect($product->url());
    }
}
