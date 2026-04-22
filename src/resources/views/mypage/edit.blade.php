@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
<form action="/logout" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="header__nav-link">ログアウト</button>
</form>
@endsection