<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class AddressController extends Controller
{
    public function edit($item_id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($item_id);

        return view('address.edit', compact('user', 'product'));
    }

    public function update(Request $request, $item_id)
    {
        $request->validate([
            'postal_code' => 'required',
            'prefecture' => 'required',
            'city' => 'required',
            'address_line' => 'required',
            'building' => 'nullable',
        ]);

        $user = Auth::user();
        $user->postal_code = $request->postal_code;
        $user->prefecture = $request->prefecture;
        $user->city = $request->city;
        $user->address_line = $request->address_line;
        $user->building = $request->building;
        $user->save();

        return redirect("/purchase/{$item_id}")
        ->with('message', '住所を更新しました');
    }
}
