<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <header class="header">
        <div class="header__inner">
            <h1 class="logo">ネットショッピング</h1>
            <div class="header__nav">
                @auth
                    <span class="user-name">{{ Auth::user()->name }}</span>
                    <a href="/profile" class="profile-btn">プロフィール</a>
                    <a href="/mypage/likes" class="mylike-btn">>マイリスト</a>
                    <a href="/sell" class="sell-btn">>出品する</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="logout-btn">ログアウト</button>
                    </form>
                @endauth
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>