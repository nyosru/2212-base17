@extends('zemkdi::layouts.master')

@section('content')
    <div class="container">

        @if ($errors->any())
            <br />
            <br />
            найдены ошибки
            @foreach ($errors->all() as $error)
                <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        @if (session()->get('success'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                {!! session()->get('success') !!}
            </div>
        @endif

        <br />
        <br />

        {{-- {{ $modAction }} --}}

        <nav class="rounded-md w-full">
            <ol class="list-reset flex">
                <li><a href="/service/items/{{ $modName }}"
                        class="text-blue-600 hover:text-blue-700">{{ $modName }}</a>
                </li>
                {{-- <li><span class="text-gray-500 mx-2">/</span></li> --}}
                {{-- <li><a href="#" class="text-blue-600 hover:text-blue-700">{{ $mod }}</a></li> --}}
                <li><span class="text-gray-500 mx-2">/</span></li>
                <li class="text-gray-500">Запись {{ $item['head'] }}</li>
            </ol>
        </nav>


        {{-- <br />        <br /> --}}
        {{-- item: {{ $item }} --}}
        {{-- <br/><br/> --}}
        {{-- item2: {{ $item->head }} --}}
        {{-- <br/><br/> --}}
        {{-- ------ --}}
        <br /> <br />


        <script src="https://cdn.tiny.cloud/1/vi265pg7dk2fhl0nhv6sujpz14vusf3fx2y2ybi3uarvdpff/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}

        @if (!empty($modAction) && $modAction == 'edit')
            <form action="/service/items/{{ $modName }}/{{ $modId }}/save" method="post"
                enctype="multipart/form-data">
                @csrf
            @elseif (!empty($modAction) && $modAction == 'add')
                <form action="/service/items/{{ $modName }}/save" method="post" enctype="multipart/form-data">
                    @csrf
        @endif

        @foreach ($item as $k => $i)
            {{-- @if ($k == 'created_at')
            @elseif($k == 'updated_at')
            @elseif($k == 'deleted_at')
            @else --}}
            {{-- <div class="border-indigo-600 border-2 mb-3"> --}}
            <div class="mb-3">
                <div class="flex flex-row ">
                    <div class="basis-1/6 text-right pr-3"> {{ $k }} </div>
                    <div class="basis-5/6">
                        @if (!empty($modAction) && ($modAction == 'edit' || $modAction == 'add'))
                            {{-- {{ $k }}<br/> --}}

                            @if (!empty($polyaType[$k]))
                                {{-- ++  {{ $polyaType[$k] }} ++ <br/> --}}
                                @if ($polyaType[$k] == 'date')
                                    <input type="date" class="w-full border border-gray-500 px-5 py-2"
                                        name="{{ $k }}" value="{{ $i }}" value="{{ old($k) }}" />
                                @elseif($polyaType[$k] == 'int-1-99')
                                    <input type="number" step="1" min="1" max="99"
                                        class="w-full border border-gray-500 px-5 py-2" name="{{ $k }}"
                                        value="{{ old($k) }}" />
                                @elseif($polyaType[$k] == 'imageJpg')
                                    <input type="file" class="w-full border border-gray-500 px-5 py-2"
                                        name="{{ $k }}" value="{{ old($k) }}" />
                                @elseif($polyaType[$k] == 'int')
                                    <input type="number" step="1" class="w-full border border-gray-500 px-5 py-2"
                                        name="{{ $k }}" value="{{ old($k) }}" />
                                @elseif($polyaType[$k] == 'textareaHtml')
                                    {{-- 111 --}}
                                    {{-- <textarea id="{{ $k }}" class="{{ $k }} w-full border border-gray-500 px-5 py-2" style="height:500px;" name="{{ $k }}">{{ $i }}</textarea> --}}
                                    <textarea id="{{ $k }}" name="{{ $k }}">{!! old($k) ?? $i !!}</textarea>

                                    {{-- <textarea>                                  Welcome to TinyMCE!                                </textarea> --}}
                                    {{-- @verbatim --}}
                                    {{-- 345345 --}}
                                    {{-- <script>
                                    tinymce.init({
                                        selector: 'textarea#k1',
                                        width: 900,
                                        height: 300
                                    });
                                </script> --}}
                                    {{-- @endverbatim --}}

                                    <script>
                                        tinymce.init({
                                            selector: 'textarea#{{ $k }}',
                                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                            tinycomments_mode: 'embedded',
                                            tinycomments_author: 'Author name',
                                            mergetags_list: [{
                                                    value: 'First.Name',
                                                    title: 'First Name'
                                                },
                                                {
                                                    value: 'Email',
                                                    title: 'Email'
                                                },
                                            ],
                                        });
                                    </script>
                                @elseif($polyaType[$k] == 'textarea')
                                    <textarea class="w-full border border-gray-500 px-5 py-2" name="{{ $k }}">{{ $i }}</textarea>
                                @else
                                    <input type="text" class="w-full border border-gray-500 px-5 py-2"
                                        name="{{ $k }}" value="{{ old($k) ?? $i }}" />
                                @endif
                            @else
                                {{ $i ?? '---' }}
                            @endif
                        @else
                            {{ $i ?? '--' }}
                        @endif
                    </div>
                    {{-- <div class="basis-5/6">
        <b>{{ $i->head }}</b>
        <br />
        {{ $i->opis_small }}
        <br />
        <a href="/service/items/{{ $modName }}/{{ $i->id }}/edit" class="text-blue-700 hover:underline">изменить</a> /
        <a href="/service/items/{{ $modName }}/{{ $i->id }}/delete" class="text-blue-700 hover:underline">удалить</a>
    </div> --}}
                    {{-- @endif --}}
                </div>
            </div>
        @endforeach

        @if ($modAction == 'edit' || $modAction == 'add')
            <div class="flex flex-row mb-3">
                <div class="basis-1/6">&nbsp;</div>
                <div class="basis-5/6">
                    <button type="submit"
                        class="rounded-md delay-500 hover:rounded-full px-5 py-3 bg-cyan-400">Сохранить</button>
                </div>
            </div>

            </form>
        @endif
    </div>
@endsection
