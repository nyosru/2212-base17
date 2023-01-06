@extends('zemkdi::layouts.master')

@section('content')
    <div class="container">

        @if (session()->get('success'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                {!! session()->get('success') !!}
            </div>
        @endif

        <script src="https://cdn.tiny.cloud/1/vi265pg7dk2fhl0nhv6sujpz14vusf3fx2y2ybi3uarvdpff/tinymce/6/tinymce.min.js?asd"
            referrerpolicy="origin"></script>

        {{-- {{ $pageName }} --}}

        {{-- {{ $page_key }} --}}
        <form action="/service/page/{{ $page_key }}" method="post">
            @csrf
            <br />
            <br />

            <h2>Страница: <u>{{ $namePage ?? '?' }}</u></h2>
            <br />
            <br />
            {{-- {!! $html !!} --}}
            <textarea name="html">{{ $html ?? 'c' }}</textarea>
            <br />
            <br />
            <button type="submit" class="bg-green-300 px-5 py-2">Сохранить</button>

        </form>

        <script>
            tinymce.init({
                selector: 'textarea',
                // plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',

  // /* without images_upload_url set, Upload tab won't show up*/
  // images_upload_url: 'postAcceptor.php',

  // /* we override default upload handler to simulate successful upload*/
  // images_upload_handler: function (blobInfo, success, failure) {
  //   setTimeout(function () {
  //     /* no matter what you upload, we will turn it into TinyMCE logo :)*/
  //     success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
  //   }, 2000);
  // },

                // tinycomments_mode: 'embedded',
                // tinycomments_author: 'Author name',
                // mergetags_list: [{
                //         value: 'First.Name',
                //         title: 'First Name'
                //     },
                //     {
                //         value: 'Email',
                //         title: 'Email'
                //     },
                // ],
            });
        </script>

    </div>

@endsection
