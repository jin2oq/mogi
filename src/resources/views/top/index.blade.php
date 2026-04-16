@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')
<div class="container">
    <h2 class="title">商品一覧</h2>
    <div class="product-list">
    @foreach ($products as $product)
        <div class="product-card">
            @if ($product->is_sold)
            <span class="sold">SOLD</span>
            @endif
            <a href="/item/{{ $product->id }}">
            <img class="product-image" src="{{ asset('storage/' . $product->img) }}" alt="">
            <p>{{ $product->name }}</p>
            </a>
            <p>¥{{ $product->price }}</p>
            <form action="/like/{{ $product->id }}" method="POST">
            @csrf
                <button>♡</button>
            </form>
            @auth
        @if (!$product->is_sold)
            <a href="/purchase/{{ $product->id }}">
                <button>レジに進む</button>
            </a>
        @else
            <button disabled>売り切れ</button>
        @endif
        @endauth
        </div>
        @endforeach
    </div>
</div>
@endsection
</html>