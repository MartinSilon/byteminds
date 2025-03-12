<div class="navbar-wrapper">
    <div class="container-fluid static-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="photos/logo.png" alt="Logo" id="logo"
                         style="max-width: 100px; transition: all 0.3s ease;">
                </a>

                <!-- Hamburger Menu (Mobilné zobrazenie) -->
                <button class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Desktop Menu -->
                <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase {{ request()->routeIs('about') ? 'active-menu' : '' }}"
                               href="{{ route('about') }}">O nás</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{ route('documents') }}">Dokumenty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="{{ route('contacts') }}">Kontakt</a>
                        </li>
                    </ul>
                </div>


                <!-- Telefónna sekcia na desktop -->
                <div class="align-items-center ms-auto d-lg-flex d-none">
                    <div class="d-flex justify-content-center align-items-center phoneIcone">
                        <i class="bi bi-telephone-inbound" style="font-size: 20px;"></i>
                    </div>
                    <div class="ms-2 ps-3">
                        <p class="mb-0 question-text">Máte otázky?</p>
                        <p class="mb-0 telephone-text" style="font-weight: bold; font-size: 16px;">
                            otazky@newgreencompany.sk</p>
                    </div>
                </div>

                <!-- Offcanvas Menu pre mobilné zobrazenie -->
                <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasMenu"
                     aria-labelledby="offcanvasMenuLabel">
                    <div class="offcanvas-header">
                        <h3 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h3>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Domov</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active-menu' : '' }}"
                                   href="{{ route('about') }}">O nás</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('documents') }}">Dokumenty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacts') }}">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </nav>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarWrapper = document.querySelector('.navbar-wrapper');
        const staticNavbar = document.querySelector('.static-navbar');

        // Sledujeme scrollovanie
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                staticNavbar.classList.add('sticky-nav');
                staticNavbar.classList.remove('static-navbar');
            } else {
                staticNavbar.classList.remove('sticky-nav');
                staticNavbar.classList.add('static-navbar');
            }
        });
    });
</script>
