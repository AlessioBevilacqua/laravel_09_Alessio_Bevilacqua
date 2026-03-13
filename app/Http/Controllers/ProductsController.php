<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;



class ProductsController extends Controller
{
    public function submitForm(ProductRequest $request) {
        $product = Product::create([
            'name' => $request-> name,
            'description' => $request-> description,
            'price' => $request-> price,
            'img' => $request-> file('img')->store('images', 'public')

            ]);
            
        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    public function productList() {
        $products = Product::all();
        return view('products', [ 'products' => $products ]);
    }
}

