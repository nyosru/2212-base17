@extends('zemkdi::layouts.master')

{{-- @section('menu')
    <a href="#">2222</a>
    <a href="#">2222</a>
    <a href="#">2222</a>
    <a href="#">2222</a>
@endsection --}}

@section('style')
    <style>
        .border-left-green {
            border-left: solid 5px green;
        }
        input.border-green {
            border: solid 1px green;
            padding: 5px; width:100%;
        }
    </style>
@endsection

@section('content')

    {{-- <br/><br/> --}}
    {{-- {!! session()->get('error') !!} --}}
    {{-- <br/><br/> --}}
    @if (session()->get('success'))
        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
            {!! session()->get('success') !!}
        </div>
    @endif
    {{-- <br/><br/> --}}
    @error('img')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br />
    <br />

    {{-- {{ Form::open( [ 'url' => 'foo/bar', 'files' => true ] ) }} --}}
    {{-- {{ Form::open( [ 'url' => 'foo/bar' ] ) }}
{{ Form::file('main_image') }}
{{ Form::close() }} --}}
<div class="bg-yellow-200 mb-3 p-5 border-left-green">
    <form action="/service/images" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label>
            картинка jpg: <input type="file" name="img" accept="image/jpeg"
                xxaccept="image/jpeg,image/png,image/gif" />
        </label>
        <br />
        <button type="submit" class="bg-green-300 px-5 py-2">Загрузить</button>
    </form>
</div>

    {{-- files: {{ print_r($files) ?? 'x' }} --}}

    @foreach ($filesUrl as $f)
        <div class="bg-green-50 mb-3 p-5 border-left-green">
            <input class="border-green" type="text" value="{{ $f }}" />
            <br />
            <form action="/service/images/delete" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="image" value="{{ str_replace('/storage', '', $f) }}" />
                <button type="submit" class="bg-red-200 rounded px-5 py-2" onclick="return confirm('удаляю файл ?')">удалить картинку</button>
            </form>
            <br />
            <a href="{{ $f }}" target="_blank">
                <img src="{{ $f }}" style="max-width:100px;" />
            </a>
        </div>
    @endforeach
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
