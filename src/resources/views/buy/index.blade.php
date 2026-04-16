@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/buy.css') }}">
@endsection

@section('content')
<div class="purchase-container">

    <div class="product-info">
        <img src="{{ asset('storage/' . $product->img) }}">
        <h2>{{ $product->name }}</h2>
        <p>¥{{ number_format($product->price) }}</p>
    </div>

    <div class="address">
        <h3>住所</h3>
        <p>{{ $user->postal_code }}</p>
        <p>{{ $user->prefecture }} {{ $user->city }}</p>
        <p>{{ $user->address_line }}</p>
        <p>{{ $user->building }}</p>

        <a href="/purchase/address/{{ $product->id }}">住所変更</a>
    </div>

    <form action="/purchase/{{ $product->id }}" method="POST">
        @csrf

        <select name="payment_method">
            <option value="convenience">コンビニ払い</option>
            <option value="card">カード払い</option>
        </select>

        <button>購入する</button>
    </form>

</div>
@endsection