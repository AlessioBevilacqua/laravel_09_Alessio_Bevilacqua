<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class ProductsController extends Controller
{
    public function submitForm(Request $request) {
        $product = Product::create([
            'name' => $request-> name,
            'description' => $request-> description,
            'price' => $request-> price,
            ]);
            
        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    public function productList() {
        $products = Product::all();
        return view('products', [ 'products' => $products ]);
    }
}

