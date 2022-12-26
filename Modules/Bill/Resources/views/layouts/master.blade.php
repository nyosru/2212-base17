<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>В Мире БИльярда - Тюменский бильярдный салон </title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('storage/bill/css.css') }}"> --}}

</head>

<body>

    @yield('content')

</body>
{{-- Laravel Mix - JS File --}}
{{-- {{ mix('bill/app.js') }} --}}
<script src="{{ mix('bill/app.js') }}"></script>
{{-- <script src="{{ asset('Modules/phpcat/public/phpcat77/js.js') }}"></script> --}}

</html>
