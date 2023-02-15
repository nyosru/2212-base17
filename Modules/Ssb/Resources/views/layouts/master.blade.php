<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Маркетёр (реализация маркетинг фишек) Сергей Бакланов</title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/ssb.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('ssb/css.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    {{-- <!-- Служебные теги: тип и точный адрес страницы --> --}}
    <meta property="og:type" content="Маркетёр Сергей Бакланов!" />
    <meta property="og:url" content="https://сергейсб.рф/index" />

    {{-- <!-- Заголовок и описание для превью --> --}}
    <meta property="og:title" content="Специалист по внедрение в дело маркетинг инструментов" />
    <meta property="og:description" content="Сергей Бакланов, занимаюсь планированием, внедрением и улучшением имеющихся маркетинг штучек в вашем деле (любого маштаба и направления)" />

    {{-- <!-- Картинка для превью, адрес картинки должен быть полным, с указанием домена сайта --> --}}
    <meta property="og:image" content="https://сергейсб.рф/ssb/preview_for_vk.ssb.jpg" />

    <meta property="vk:image" content="https://сергейсб.рф/ssb/preview_for_vk.ssb.jpg" />


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Маркетёр Сергей Бакланов!">
    <meta name="twitter:description" content="Сергей Бакланов, занимаюсь планированием, внедрением и улучшением имеющихся маркетинг штучек в вашем деле (любого маштаба и направления)">
    <meta name="twitter:image" content="https://сергейсб.рф/ssb/preview_for_vk.ssb.jpg">

</head>

<body>

    @yield('content')

    <div class="container">

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

            <div class="col-md-4 d-flex align-items-center">
                {{-- <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a> --}}
                <span class="mb-3 mb-md-0 text-muted">© 2020-{{ date('Y') }} Сергей и <abbr title="Интернет" >И</abbr> и <abbr title="Искуственный Интелект (нейросети)" >ИИ</abbr></span>
            </div>

            {{-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul> --}}

        </footer>
    </div>

</body>

{{-- Laravel Mix - JS File --}}
{{-- <script src="{{ mix('ssb/app.js') }}"></script> --}}
<script src="{{ asset('ssb/app.js') }}?r={{ rand() }}"></script>

</html>
