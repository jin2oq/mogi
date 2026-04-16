@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile">
    <h2>プロフィール</h2>
        <div class="profile-item">
            <p>名前</p>
            <p>{{ $user->name }}</p>
        </div>
        <div class="profile-item">
            <p>メールアドレス</p>
            <p>{{ $user->email }}</p>
        </div>
        <div class="profile-item address">
            <p>住所</p>
            <p>
                〒{{ $user->postal_code }}<br>
                {{ $user->prefecture }}{{ $user->city }}{{ $user->address_line }}<br>
                {{ $user->building }}
            </p>
        </div>
    <a href="/profile/edit" class="edit-btn">プロフィールを編集</a>
    <a href="/" class="back-btn">← 商品一覧に戻る</a>
</div>
@endsection