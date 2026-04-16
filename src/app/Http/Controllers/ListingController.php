<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ListingController extends Controller
{
    public function index()
    {
        return view('listing.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'brand' => 'nullable',
            'description' => 'nullable',
            'condition' => 'nullable',
            'img' => 'required|image'
        ]);

        $path = $request->file('img')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
            'description' => $request->description,
            'condition' => $request->condition,
            'img' => $path,
        ]);

        return redirect('/');
    }
}
