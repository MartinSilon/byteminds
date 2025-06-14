<div class="navbar-wrapper fixed-top d-flex justify-content-center pt-3">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container d-flex justify-md-content-evenly">
                <a class="navbar-brand d-md-none d-md-none py-2" href="/">
                    <img src="{{ asset('images/structure/logo-fullname.png') }}" alt="Byteminds - rýchle aj komplexné riešenia" id="logo" class=""
                         style="height: 40px; transition: all 0.3s ease;">
                </a>
                <a class="navbar-brand d-none d-md-block" href="/">
                    <img class="md-logo" src="{{ asset('images/structure/logo-shortform.svg') }}" alt="Byteminds - rýchle aj komplexné riešenia" id="logo" class=""
                         style="height: 60px; transition: all 0.3s ease;">
                </a>


                <a class="navbar-brand d-md-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                    <img src="{{ asset('images/structure/menu.svg') }}" style="height: 30px; transition: all 0.3s ease;">
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Domov</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Služby</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Referencie</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Kontakt</a>
                        </li>

                        <li class="nav-item d-flex align-items-center" id="lastItem">
                            <a class="nav-link text-uppercase text-center  {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                               href="{{ route('home') }}">Konzultácia zadarmo</a>
                        </li>

                    </ul>
                </div>




                <!-- Offcanvas Menu pre mobilné zobrazenie -->
                <div class="offcanvas offcanvas-end d-lg-none w-100  border-0" tabindex="-1" id="offcanvasMenu"
                     aria-labelledby="offcanvasMenuLabel">
                    <div class="offcanvas-body px-0 d-flex align-items-center justify-content-center h-75">
                        <ul class="navbar-nav text-center">

                            <li class="nav-item px-3 py-3">
                                <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Domov</a>
                            </li>
                            <li class="nav-item px-3 py-3 pb-1">
                                <a class="nav-link text-uppercase">Služby</a>
                            </li>
                            <li class="nav-item px-3 py-3">
                                <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Referencie</a>
                            </li>
                            <li class="nav-item px-3 py-3">
                                <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Kontakt</a>
                            </li>
                            <li class="nav-item px-md-1 px-3 py-3">
                                <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Konzultácia zadarmo</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </nav>
    </div>
</div>





