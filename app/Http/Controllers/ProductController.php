<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('catalog', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('catalog-detail', compact('product'));
    }
}
