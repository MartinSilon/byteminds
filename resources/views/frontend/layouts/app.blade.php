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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title> @yield('title')</title>
    <link rel="icon" href="{{ asset('images/structure/logo-shortform.svg') }}" type="image/icon type">

    <!-- CSS -->
    @yield('style')
</head>


<body>
    <div class="loader">
        <div class="loader-left"></div>
        <div class="loader-right"></div>
        <div class="loader-logo">
            <div class="loader-ring"></div>
            <img src="{{ asset('images/structure/logo-shortform.svg') }}" alt="Logo" height="100px" width="100px"/>
        </div>
    </div>

@include('frontend.components.nav-bar')

<main>
    @yield('content')
</main>


@include('frontend.components.footer')




    <script>
        setTimeout(function() {
            var logo = document.querySelector(".loader-logo");
            logo.style.transition = "opacity 0.3s ease-in-out";
            logo.style.opacity = "0";

            var loaderLeft = document.querySelector(".loader-left");
            loaderLeft.style.transition = "transform 0.4s ease-in-out";
            loaderLeft.style.transform = "translateX(-100%)";

            var loaderRight = document.querySelector(".loader-right");
            loaderRight.style.transition = "transform 0.4s ease-in-out";
            loaderRight.style.transform = "translateX(100%)";

            setTimeout(function() {
                var loader = document.querySelector(".loader");
                if(loader) {
                    loader.remove();
                }
            }, 1000);
        }, 1000);
    </script>

</body>
</html>

