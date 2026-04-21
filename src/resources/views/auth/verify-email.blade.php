@extends('layouts.app')

@section('title', 'メール認証')

@section('css')
<link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">
@endsection

@section('content')
<div class="verify">
    <div class="verify__container">

        <p class="verify__text">
            登録していただいたメールアドレスに認証メールを送付しました。<br>
            メール認証を完了してください。
        </p>

        <a href="#" class="verify__button">認証はこちらから</a>

        <a href="#" class="verify__resend">認証メールを再送する</a>

    </div>
</div>
@endsection