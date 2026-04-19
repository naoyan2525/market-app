<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header class="header">
        <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
    </header>

    <main class="login">
        <div class="login__container">
            <h1 class="login__title">ログイン</h1>

            <form action="/" method="POST" class="login-form">
                @csrf

                <div class="login-form__group">
                    <label for="email" class="login-form__label">メールアドレス</label>
                    <input type="email" name="email" id="email" class="login-form__input" value="{{ old('email') }}">
                </div>

                <div class="login-form__group">
                    <label for="password" class="login-form__label">パスワード</label>
                    <input type="password" name="password" id="password" class="login-form__input">
                </div>

                <button type="submit" class="login-form__button">ログインする</button>

                <a href="/register" class="login-form__link">会員登録はこちら</a>
            </form>
        </div>
    </main>
</body>
</html>