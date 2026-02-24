<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'purchase_price' => 'required|numeric|min:0',
            'sell_price'     => 'required|numeric|min:0',
            'opening_stock'  => 'required|integer|min:0',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->purchase_price = $request->purchase_price;
        $product->sell_price = $request->sell_price;
        $product->opening_stock = $request->opening_stock;
        $product->save();

        return redirect()->route('products.index')->with('success','Product added successfully');
    }
}


