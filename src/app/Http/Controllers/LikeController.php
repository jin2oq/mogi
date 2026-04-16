<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function toggle($productId)
    {
    $user = Auth::user();

    $like = Like::where('user_id', $user->id)
                ->where('product_id', $productId)
                ->first();

    if ($like) {
        $like->delete();
    } else {
        Like::create([
            'user_id' => $user->id,
            'product_id' => $productId
        ]);
    }

    return back();
    }

    public function index()
{
    $likes = Like::where('user_id', Auth::id())->get();

    return view('likes.index', compact('likes'));
}
}
