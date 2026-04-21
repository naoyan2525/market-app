@extends('layouts.app')

@section('title', 'ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
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
</div>
@endsection
</body>
</html>