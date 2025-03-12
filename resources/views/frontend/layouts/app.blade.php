<!DOCTYPE html>
<html lang="sk">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

{{--    <script src="{{ asset('js/frontend/script.js') }}"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/Frontend/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title> @yield('title')</title>
    <link rel="icon" href="{{ asset('images/structure/logo-shortform.svg') }}" type="image/icon type">

    <!-- CSS -->
    @yield('style')
</head>


<body>

{{--<div class="container-fluid headBar d-lg-block d-none">--}}
{{--    <div class="row">--}}
{{--        <div class="col-3  mt-3">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <i class="bi bi-geo-alt-fill" style="color: #fbc402; "></i>--}}
{{--                <p class="text-white headText ps-2 small">Horný Val 8/17, 01001 Žilina</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-3  mt-3">--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <i class="bi bi-envelope-fill" style="color: #fbc402; "></i>--}}
{{--                <a class="text-decoration-none" href="mailto:poradca@newgreencompany.sk"><p class="text-decoration-none text-white headText ps-2 small">poradca@newgreencompany.sk</p></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-2 offset-md-2 mt-md-0 mt-3 pe-0 pb-0" style="border-right: 1px solid #1e3226">--}}
{{--            <a href="{{ route('find-customer') }}">--}}
{{--                <button class="w-100 h-100 btn-request">--}}
{{--                    <span>Nájsť zákazníka</span>--}}
{{--                </button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-2 mt-md-0 mt-3 pe-0 pb-0 ps-0">--}}
{{--            <a href="{{ route('interest') }}">--}}
{{--            <button class="w-100 h-100 btn-request">--}}
{{--                <span>Mám záujem o spoluprácu</span>--}}
{{--            </button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@include('frontend.components.nav-bar')

<main>
    @yield('content') <!-- Tu sa vloží obsah podstránok -->
</main>


@include('frontend.components.footer')


</body>
</html>

