@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @@parent

    <p>ここはメインのサイドバーに追加される</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
@endsection

@component('alert',['title' => 'titling'])

    You are not allowed to access this resource!
@endcomponent

Hello, {{ $name ?? 'taro' }} <br>
Current time is {{ time() }} <br>