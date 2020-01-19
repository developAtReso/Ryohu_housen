@extends('layout')

@section('title')
 sugatest1
@endsection

@section('content')

<h2>ポチ太郎</h2>
ぴこたろう<br>
sugatest1

@endsection

@component('alert')
    @slot('title')
        Forbidden
    @endslot

    You are not allowed to access this resource!
@endcomponent