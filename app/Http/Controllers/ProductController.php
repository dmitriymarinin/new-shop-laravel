<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($category, $id)
    {
        $item = Product::where('id', $id)->first();
        return view('product.show', [
            'item' => $item
        ]);
    }

    public function showCategory()
    {

    }
}
