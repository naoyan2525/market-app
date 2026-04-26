<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/">
                <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECHロゴ" class="header__logo">
            </a>

            <form action="/" method="GET" class="header__search-form">
                <input
                    type="text"
                    name="keyword"
                    class="header__search-input"
                    placeholder="なにをお探しですか？"
                    value="{{ request('keyword') }}"
                >
            </form>
    <nav class="header__nav">

    <form action="/logout" method="POST" class="header__logout-form">
        @csrf
        <button type="submit" class="header__nav-link logout-btn">ログアウト</button>
    </form>

    <a href="/mypage" class="header__nav-link">マイページ</a>
    <a href="/sell" class="header__sell-button">出品</a>
    </nav>
         
        </div>
    </header>

    <main>
        <div class="profile">
            <h1 class="profile__title">プロフィール設定</h1>

            <form class="profile-form" action="/mypage/profile" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="profile-form__image-area">
                    <div class="profile-form__image"></div>

                    <label class="profile-form__image-button">
                        画像を選択する
                        <input type="file" name="image" class="profile-form__file-input">
                    </label>
                </div>

                <div class="profile-form__group">
                    <label class="profile-form__label">ユーザー名</label>
                    <input type="text" name="name" class="profile-form__input">
                </div>

                <div class="profile-form__group">
                    <label class="profile-form__label">郵便番号</label>
                    <input type="text" name="postcode" class="profile-form__input">
                </div>

                <div class="profile-form__group">
                    <label class="profile-form__label">住所</label>
                    <input type="text" name="address" class="profile-form__input">
                </div>

                <div class="profile-form__group">
                    <label class="profile-form__label">建物名</label>
                    <input type="text" name="building" class="profile-form__input">
                </div>

                <button type="submit" class="profile-form__button">更新する</button>
            </form>
        </div>
    </main>
</body>
</html>