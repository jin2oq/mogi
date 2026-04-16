<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                ネットショッピング
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>ログイン</h2>
            </div>
            @if ($errors->any())
                <div style="color: red;">
                    {{ $errors->first() }}
                </div>
            @endif
            <form action="/login" method="POST">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                <input type="email" name="email" placeholder="test@example.com">
                </div>
            </div>
        </div>

        <div class="form__group">
        <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
        <span class="form__label--required">必須</span>
        </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password">
                    </div>
                </div>
        </div>

            <div class="form__button">
            <button class="form__button-submit">ログイン</button>
            </div>
            </form>

        </div>

</main>

</body>
</html>