<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/">
                <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
            </a>

            <form action="/" method="GET" class="header__search-form">
                <input type="text" name="keyword" class="header__search-input" placeholder="なにをお探しですか？">
            </form>

            <nav class="header__nav">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="header__nav-link header__logout">ログアウト</button>
                </form>
                <a href="/mypage" class="header__nav-link">マイページ</a>
                <a href="/sell" class="header__sell-button">出品</a>
            </nav>
        </div>
    </header>

    <main class="mypage">
        <section class="profile">
            <div class="profile__image"></div>

            <h1 class="profile__name">ユーザー名</h1>

            <a href="/mypage/edit" class="profile__edit-button">
                プロフィールを編集
            </a>
        </section>

        <div class="tabs">
            <a href="/mypage?tab=sell" class="tabs__item tabs__item--active">出品した商品</a>
            <a href="/mypage?tab=buy" class="tabs__item">購入した商品</a>
        </div>

        <section class="item-list">
            {{-- 出品商品がある場合 --}}
            @forelse ($items ?? [] as $item)
                <div class="item-card">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="商品画像" class="item-card__image">
                    <p class="item-card__name">{{ $item->name }}</p>
                </div>

            {{-- 出品商品がない場合 --}}
            @empty
                @for ($i = 0; $i < 7; $i++)
                    <div class="item-card">
                        <div class="item-card__dummy-image">商品画像</div>
                        <p class="item-card__name">商品名</p>
                    </div>
                @endfor
            @endforelse
        </section>
    </main>
</body>
</html>