<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('top.index', compact('products'));
    }

    public function store($id)
    {
        $product = Product::findOrFail($id);

        if ($product->is_sold) {
            return redirect('/')->with('error', '売り切れです');
        }

        $product->is_sold = true;
        $product->save();

        return redirect('/')->with('message', '購入しました');
    }
}
