@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Listing.css') }}">
@endsection

@section('content')
<div class="sell">
    <div class="sell__container">
        <h2 class="sell__title">商品を出品する</h2>
        <form action="/sell" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sell__group">
                <label class="sell__label">商品画像</label>
                <input type="file" name="img" class="sell__input">
            </div>
            <div class="sell__group">
                <label class="sell__label">商品名</label>
                <input type="text" name="name" class="sell__input">
            </div>
            <div class="sell__group">
                <label class="sell__label">価格</label>
                <input type="number" name="price" class="sell__input">
            </div>
            <div class="sell__group">
                <label class="sell__label">ブランド</label>
                <input type="text" name="brand" class="sell__input">
            </div>
            <div class="sell__group">
                <label class="sell__label">商品の状態</label>
                <select name="condition" class="sell__select">
                    <option value="">選択してください</option>
                    <option value="新品">新品</option>
                    <option value="未使用に近い">未使用に近い</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="傷や汚れあり">傷や汚れあり</option>
                </select>
            </div>
            <div class="sell__group">
                <label class="sell__label">商品説明</label>
                <textarea name="description" class="sell__textarea"></textarea>
            </div>
            <div class="sell__button">
                <button type="submit">出品する</button>
            </div>
        </form>
    </div>
</div>
<a href="/" class="back-btn">← 商品一覧に戻る</a>
@endsection