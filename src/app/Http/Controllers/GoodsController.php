<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GoodsController extends Controller
{
    public function show($item_id)
    {
        $product = Product::findOrFail($item_id);
        return view('goods.index', compact('product'));
    }
}
