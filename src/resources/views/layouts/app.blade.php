<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'COACHTECH')</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header header--market">
        <div class="header__inner header__inner--market">
            <a href="/" class="header__logo-link">
                <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
            </a>

            <form action="" method="get" class="header__search-form">
                <input
                    type="text"
                    name="keyword"
                    class="header__search-input"
                    placeholder="なにをお探しですか？"
                    value="{{ request('keyword') }}"
                >
            </form>

            <nav class="header__nav">
                <a href="/logout" class="header__nav-link">ログアウト</a>
                <a href="/mypage" class="header__nav-link">マイページ</a>
                <a href="/sell" class="header__sell-button">出品</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>