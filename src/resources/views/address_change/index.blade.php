@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>住所変更</h2>
        </div>
        <form action="/purchase/address/{{ $product->id }}" method="POST">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="postal_code"
                            value="{{ old('postal_code', $user->postal_code) }}"
                            placeholder="例）123-4567">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">都道府県</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="prefecture"
                            value="{{ old('prefecture', $user->prefecture) }}">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">市区町村</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="city"
                            value="{{ old('city', $user->city) }}">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">町名・番地</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address_line"
                            value="{{ old('address_line', $user->address_line) }}">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名・部屋番号</span>
                    <span class="form__label--optional">任意</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building"
                            value="{{ old('building', $user->building) }}">
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit">更新</button>
            </div>
        </form>
    </div>
    <a href="/" class="back-btn">← 商品一覧に戻る</a>
</main>
@endsection