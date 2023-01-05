@extends('zemkdi::layouts.master')

@section('menu')
<a href="#" >2222</a>
<a href="#" >2222</a>
<a href="#" >2222</a>
<a href="#" >2222</a>
@endsection

@section('content')
images
    {{-- <h1>Hello World</h1>
    не авторизован
    <br />
    user
    {{ auth()->user() }}<br />
    <a href="{{ route('zemk-logout2') }}">выйти</a>
    <br /> --}}

    {{-- <a href="{{ route('zemk-vk-enter') }}">пройти авторизацию в вк</a> --}}
    <p>
        {{-- This view is loaded from module: {!! config('zemkdi.name') !!} --}}
    </p>
@endsection
