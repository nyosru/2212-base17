@extends('zemkdi::layouts.master')

@section('content')
    <div class="container">

        @if (session()->get('success'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                {!! session()->get('success') !!}
            </div>
        @endif

        <br />
        <br />
        {{-- items: {{ $items }} --}}

        <div class="container mx-auto">
            @foreach ($items as $i)
                <div class="flex flex-row mb-1 px-5 py-2 bg-gray-200">
                    <div class="basis-1/6"> 
                        {{-- {{ $i->id }} / --}}
                        {{ $i->date }}
                    </div>
                    <div class="basis-5/6">
                        <b>{{ $i->head }}</b>
                        <br />
                        {!! $i->opis_small !!}
                        <br />
                        <a href="/service/items/{{ $modName }}/{{ $i->id }}/edit" class="text-blue-700 hover:underline">изменить</a> /
                        <a href="/service/items/{{ $modName }}/{{ $i->id }}/delete" 
                            onclick="return confirm('Удалить ?')"
                            class="text-blue-700 hover:underline">удалить</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
