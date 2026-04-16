@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/goods.css') }}">
@endsection

@section('content')
<div class="item-detail">
    <div class="item-left">
        <div class="item-image">
            <img src="{{ asset('storage/' . $product->img) }}" alt="">
        </div>
        <div class="item-description">
            <h3>商品説明</h3>
            <p>{{ $product->description }}</p>
        </div>
    </div>
    <div class="item-info">
        <h2>{{ $product->name }}</h2>
        <p class="price">¥{{ number_format($product->price) }}</p>
        <p>ブランド：{{ $product->brand ?? '不明' }}</p>
        <p>いいね数：{{ $product->likes_count ?? 0 }}</p>
        <div class="comment-box">
            <h3>コメント</h3>
            <form action="/comment/{{ $product->id }}" method="POST">
                @csrf
                <textarea name="comment"></textarea>
                <button>送信</button>
            </form>
        </div>
    </div>

</div>
@endsection