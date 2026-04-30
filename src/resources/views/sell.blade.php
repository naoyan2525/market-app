<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品の出品</title>
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
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
            <form action="/logout" method="POST">
                @csrf
                <button class="header__link">ログアウト</button>
            </form>

            <a href="/mypage" class="header__link">マイページ</a>
            <a href="/sell" class="header__button">出品</a>
        </nav>
    </div>
</header>

<main class="sell-page">
    <h1 class="sell-page__title">商品の出品</h1>

    <form action="/sell" method="POST" enctype="multipart/form-data" class="sell-form">
        @csrf

        <div class="sell-form__group">
            <label class="sell-form__label">商品画像</label>
            <div class="sell-form__image-box">
                <label class="sell-form__image-button">
                    画像を選択する
                    <input type="file" name="image" class="sell-form__file">
                </label>
            </div>
        </div>

        <h2 class="sell-form__section-title">商品の詳細</h2>

        <div class="sell-form__group">
            <label class="sell-form__label">カテゴリー</label>

            <div class="category-list">
                @foreach (['ファッション','家電','インテリア','レディース','メンズ','コスメ','本','ゲーム','スポーツ','キッチン','ハンドメイド','アクセサリー','おもちゃ','ベビー・キッズ'] as $category)
                    <label class="category-item">
                        <input type="checkbox" name="categories[]" value="{{ $category }}">
                        <span>{{ $category }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <div class="sell-form__group">
            <label class="sell-form__label">商品の状態</label>
            <select name="condition" class="sell-form__select">
                <option value="">選択してください</option>
                <option value="良好">良好</option>
                <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                <option value="状態が悪い">状態が悪い</option>
            </select>
        </div>

        <h2 class="sell-form__section-title">商品名と説明</h2>

        <div class="sell-form__group">
            <label class="sell-form__label">商品名</label>
            <input type="text" name="name" class="sell-form__input">
        </div>

        <div class="sell-form__group">
            <label class="sell-form__label">ブランド名</label>
            <input type="text" name="brand" class="sell-form__input">
        </div>

        <div class="sell-form__group">
            <label class="sell-form__label">商品の説明</label>
            <textarea name="description" class="sell-form__textarea"></textarea>
        </div>

        <div class="sell-form__group">
            <label class="sell-form__label">販売価格</label>
            <div class="sell-form__price-wrap">
                <span>¥</span>
                <input type="text" name="price" class="sell-form__price-input">
            </div>
        </div>

        <button type="submit" class="sell-form__button">出品する</button>
    </form>
</main>

</body>
</html>