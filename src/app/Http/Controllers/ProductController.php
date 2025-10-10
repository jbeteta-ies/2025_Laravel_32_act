<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController
{
    public function index(): View
    {
         $products = Product::all();
        return view('products.index', compact('products'));
    }
}
