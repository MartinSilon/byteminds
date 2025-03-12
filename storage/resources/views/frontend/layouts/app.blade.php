<!DOCTYPE html>
<html lang="sk">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
</head>


<body>

<div class="container-fluid headBar d-lg-block d-none">
    <div class="row">
        <div class="col-3  mt-3">
            <div class="d-flex justify-content-center">
                <i class="bi bi-geo-alt-fill" style="color: #fbc402; "></i>
                <p class="text-white headText ps-2 small">Horný Val 8/17, 01001 Žilina</p>
            </div>
        </div>
        <div class="col-3 offset- mt-3">
            <div class="d-flex justify-content-center">
                <i class="bi bi-envelope-fill" style="color: #fbc402; "></i>
                <p class="text-white headText ps-2 small">poradca@newgreencompany.sk</p>
            </div>
        </div>
        <div class="col-2 offset-md-4 mt-md-0 mt-3 pe-0 pb-0">
            <a href="{{ route('interest') }}">
            <button class="w-100 h-100 btn-request">
                <span>Mám záujem o spoluprácu</span>
            </button>
            </a>
        </div>
    </div>
</div>
@include('frontend.components.nav-bar')
<main>
    @yield('content') <!-- Tu sa vloží obsah podstránok -->
</main>


@include('frontend.components.footer')


</body>
</html>

