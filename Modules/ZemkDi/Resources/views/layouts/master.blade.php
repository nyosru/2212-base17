<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Di</title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('zemkdi/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('zemkdi/app.css') }}">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" /> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
</script> --}}

    <style>
        html {
            background-image: url('https://mdbootstrap.com/img/new/textures/full/{{ rand(1, 300) }}.jpg');
            background-size: cover;
            background-attachment: fixed;
            /* background-position-y: center; */
        }

        @auth body {
                background-color: rgba(255, 255, 255, 0.7);
                min-height: 100vh;
            }
        @endauth
    </style>

    @auth
        @yield('style')
    @endauth

</head>

<body>

    @include('zemkdi::layouts/header')

    @auth
        <div class="container mx-auto">
            @yield('content')
        </div>
    @endauth

    <div class="px-10 py-5 text-center" style="height:15vh;">
        вот вот и получится
    </div>

</body>

{{-- Laravel Mix - JS File --}}
{{-- <script src="{{ mix('zemkdi/app.js') }}"></script> --}}
<script src="{{ asset('zemkdi/app.js') }}"></script>
{{-- <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}

</html>
