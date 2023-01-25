<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Программирование сайтов PHP-cat.com</title>
    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/phpcat.css') }}"> --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
