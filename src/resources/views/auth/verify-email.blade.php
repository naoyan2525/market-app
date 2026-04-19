<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メール認証</title>
    <link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">
</head>
<body>

<header class="header">
    <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
</header>

<main class="verify">
    <div class="verify__container">

        <p class="verify__text">
            登録していただいたメールアドレスに認証メールを送付しました。<br>
            メール認証を完了してください。
        </p>

        <a href="#" class="verify__button">認証はこちらから</a>

        <a href="#" class="verify__resend">認証メールを再送する</a>

    </div>
</main>

</body>
</html>