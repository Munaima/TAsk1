<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
{
    $product = getProductById($id); // Fetch product data from database or mock
    return view('detail', compact('product'));
}
}


