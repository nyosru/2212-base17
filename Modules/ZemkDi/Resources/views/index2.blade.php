@extends('zemkdi::layouts.master')

@section('content')
    
<div class="container">

      <script src="https://cdn.tiny.cloud/1/vi265pg7dk2fhl0nhv6sujpz14vusf3fx2y2ybi3uarvdpff/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
      <textarea>
        Welcome to TinyMCE!
      </textarea>

        <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ],
        });
      </script>

<button type="submit" >Сохранить</button>

</div>

<h1>Hello World</h1>
авторизован

user 
{{ auth()->user() }}
<br/>
<br/>
<a href="{{ route('zemk-logout2') }}" >выйти</a>
    <p>
        This view is loaded from module: {!! config('zemkdi.name') !!}
    </p>
@endsection
