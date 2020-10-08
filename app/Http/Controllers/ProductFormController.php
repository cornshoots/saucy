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
            'productname' => 'required|min:4|max:100',
            'product_description' => 'required|min:10',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/|min:0.01|max:100",
            'supplier_id' => 'required|integer|min:1|max:10',
            'productimage' => 'required|url'
        ]);

        $product = Product::create($input);


        return redirect($product->url());
    }
}
