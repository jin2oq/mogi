<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class BuyController extends Controller
{
        public function show($item_id)
    {
        $product = Product::findOrFail($item_id);
        $user = Auth::user();

        return view('buy.index', compact('product','user'));
    }

    public function store(Request $request, $item_id)
    {
        $product = Product::findOrFail($item_id);

        $product->is_sold = true;
        $product->save();

        return redirect('/')->with('message', '購入しました');
    }
}
