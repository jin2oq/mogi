<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile_changeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LikeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', function () {Auth::logout();return redirect('/login');});
Route::middleware('auth')->group(function () {
    Route::get('/', [TopController::class, 'index']);
});
Route::post('/like/{product}', [LikeController::class, 'toggle'])->middleware('auth');
Route::get('/mypage/likes', [LikeController::class, 'index'])->middleware('auth');
Route::get('/purchase/{item_id}', [BuyController::class, 'show']);
Route::post('/purchase/{item_id}', [BuyController::class, 'store']);
Route::get('/purchase/address/{item_id}', [AddressController::class, 'edit'])->middleware('auth');
Route::post('/purchase/address/{item_id}', [AddressController::class, 'update'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/profile/edit', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/item/{item_id}', [GoodsController::class, 'show']);
Route::get('/sell', [ListingController::class, 'index'])->middleware('auth');
Route::post('/sell', [ListingController::class, 'store'])->middleware('auth');