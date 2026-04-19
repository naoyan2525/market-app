<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    
</body>
</html>


<body>
    <header class="header">
        <div class="header__inner">
            <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
        </div>
    </header>

    <main class="register">
        <div class="register__container">
            <h1 class="register__title">会員登録</h1>

            <form class="register-form" action="/register" method="POST">
                @csrf

                <div class="register-form__group">
                    <label class="register-form__label">ユーザー名</label>
                    <input type="text" name="name" class="register-form__input">
                </div>

                <div class="register-form__group">
                    <label class="register-form__label">メールアドレス</label>
                    <input type="email" name="email" class="register-form__input">
                </div>

                <div class="register-form__group">
                    <label class="register-form__label">パスワード</label>
                    <input type="password" name="password" class="register-form__input">
                </div>

                <div class="register-form__group">
                    <label class="register-form__label">確認用パスワード</label>
                    <input type="password" name="password_confirmation" class="register-form__input">
                </div>

                <button type="submit" class="register-form__button">登録する</button>

                <a href="/login" class="register-form__link">ログインはこちら</a>
            </form>
        </div>
    </main>
</body>