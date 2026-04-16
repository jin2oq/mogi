@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile_change.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>プロフィール編集</h2>
    </div>

    <form action="/profile/edit" method="POST">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">名前</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="name" placeholder="名前">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">メールアドレス</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="email" name="email" placeholder="メールアドレス">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">郵便番号</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="postal_code" placeholder="郵便番号">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">都道府県</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="prefecture" placeholder="都道府県">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">市区町村</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="city" placeholder="市区町村">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">町名・番地</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="address_line" placeholder="○◯町△丁目">
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label-item">建物名・部屋番号</span>
            </div>
            <div class="form_group-content">
                <div class="form_input-text">
                    <input type="text" name="building" placeholder="○○-△△">
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit">編集</button>
        </div>
    </form>
</div>
@endsection