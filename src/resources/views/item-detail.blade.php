<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細</title>
    <link rel="stylesheet" href="{{ asset('css/item-detail.css') }}">
</head>
<body>

<header class="header">
    <div class="header__inner">
        <a href="/" class="header__logo">
            <img src="{{ asset('images/coachtech.png') }}" alt="COACHTECH">
        </a>

        <form action="/" method="GET" class="header__search">
            <input type="text" name="keyword" placeholder="なにをお探しですか？">
        </form>

        <nav class="header__nav">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
            <a href="/mypage">マイページ</a>
            <a href="/sell" class="header__sell">出品</a>
        </nav>
    </div>
</header>

<main class="detail">
    <div class="detail__inner">

        <div class="detail__image-area">
            <img src="{{ $item->image }}" alt="商品画像" class="detail__image">
        </div>

        <div class="detail__content">

            <h1 class="detail__title">{{ $item->name }}</h1>
            <p class="detail__brand">{{ $item->brand }}</p>

            <p class="detail__price">
                ¥{{ number_format($item->price) }}
                <span>（税込）</span>
            </p>

            <div class="detail__actions">
                <div class="detail__action">
                    <div class="detail__icon">
                        <img src="{{ asset('images/ハートロゴ_デフォルト.png') }}" alt="いいね">
                    </div>
                    <p>3</p>
                </div>

                <div class="detail__action">
                    <div class="detail__icon">
                        <img src="{{ asset('images/comment.png') }}" alt="コメント">
                    </div>
                    <p>1</p>
                </div>
            </div>

          
            <a href="/purchase/{{ $item->id }}" class="detail__purchase">
                購入手続きへ
            </a>

            
            <section class="detail__section">
                <h2>商品説明</h2>
                <p>{{ $item->description }}</p>
            </section>

            
            <section class="detail__section">
                <h2>商品の情報</h2>

                <div class="detail__info-row">
                    <span class="detail__info-label">カテゴリー</span>
                    <div class="detail__tags">
                        <span>洋服</span>
                        <span>メンズ</span>
                    </div>
                </div>

                <div class="detail__info-row">
                    <span class="detail__info-label">商品の状態</span>
                    <p>{{ $item->condition }}</p>
                </div>
            </section>

            <!-- コメント -->
            <section class="detail__section">
                <h2 class="detail__comment-title">コメント</h2>

                <div class="comment">
                    <div class="comment__user">
                        <div class="comment__avatar"></div>
                        <p>admin</p>
                    </div>
                    <p class="comment__body">こちらにコメントが入ります。</p>
                </div>

                <form action="/item/{{ $item->id }}/comment" method="POST" class="comment-form">
                    @csrf
                    <label>商品へのコメント</label>
                    <textarea name="comment"></textarea>
                    <button type="submit">コメントを送信する</button>
                </form>
            </section>

        </div>
    </div>
</main>

</body>
</html>