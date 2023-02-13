@extends('ssb::layouts.master')

@section('content')
    <div id="app">

        {{-- showTime: {{showTime }} --}}

        <div class="col-12 text-center">
            <router-view name="menu"></router-view>
        </div>

        <router-view name="content"></router-view>

        {{-- <page-index /> --}}

    </div>
@endsection
