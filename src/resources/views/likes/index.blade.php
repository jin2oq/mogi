@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/like.css') }}">
@endsection

@section('content')
<div class="container">
    <h2>マイリスト</h2>

    <div class="product-list">
        @foreach ($likes as $like)
            <div class="product-card">
                <img src="{{ asset('storage/' . $like->product->img) }}" alt="">
                <p>{{ $like->product->name }}</p>
                <p>¥{{ number_format($like->product->price) }}</p>
            </div>
        @endforeach
    </div>
</div>
<a href="/" class="back-btn">← 商品一覧に戻る</a>
@endsection
