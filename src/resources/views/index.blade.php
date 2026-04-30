<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<header class="header">
    <div class="header__inner">
        <a href="/">
            <img src="{{ asset('images/coachtech.png') }}" class="header__logo">
        </a>

        <form action="/" method="GET" class="header__search">
            <input type="text" name="keyword" placeholder="なにをお探しですか？">
        </form>

        <nav class="header__nav">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button class="header__link">ログアウト</button>
                </form>
            @else
                <a href="/login" class="header__link">ログイン</a>
            @endauth

            <a href="{{ Auth::check() ? '/mypage' : '/login' }}" class="header__link">
                マイページ
            </a>

            <a href="/sell" class="header__button">出品</a>
        </nav>
    </div>
</header>

<main class="item-page">

    <div class="tabs">
        <a href="/" class="tab">おすすめ</a>
        <a href="#" class="tab active">マイリスト</a>
    </div>

    <div class="item-list">
        @foreach ($items as $item)
            <div class="item-card">
                <img src="{{ $item->image }}" class="item-image">
                <p class="item-name">{{ $item->name }}</p>
            </div>
        @endforeach
    </div>

</main>

</body>
</html>