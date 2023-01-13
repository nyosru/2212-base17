<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Программирование сайтов PHP-cat.com</title>
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/phpcat.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('phpcat/css.css') }}?{{ rand() }}">
</head>

<body>
    @yield('content')
</body>
{{-- Laravel Mix - JS File --}}
{{-- <script src="{{ mix('phpcat/app.js') }}"></script> --}}
{{-- <script src="{{ mix('phpcat/app.js') }}"></script> --}}
<script src="{{ asset('phpcat/app.js') }}?{{ rand() }}"></script>
{{-- <script src="{{ asset('Modules/phpcat/public/phpcat77/js.js') }}"></script> --}}

</html>
