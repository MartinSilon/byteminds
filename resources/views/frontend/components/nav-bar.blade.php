<div class="navbar-wrapper fixed-top d-flex justify-content-center pt-3">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container d-flex justify-md-content-evenly">
                <a class="navbar-brand d-md-none d-lg-none" href="/">
                    <img src="{{ asset('images/structure/logo-fullname.svg') }}" alt="Byteminds - rýchle aj komplexné riešenia" id="logo" class=""
                         style="height: 60px; transition: all 0.3s ease;">
                </a>
                <a class="navbar-brand d-none d-md-block d-lg-block" href="/">
                    <img src="{{ asset('images/structure/logo-shortform.svg') }}" alt="Byteminds - rýchle aj komplexné riešenia" id="logo" class=""
                         style="height: 60px; transition: all 0.3s ease;">
                </a>

                <a class="navbar-brand d-md-none d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                    <img src="{{ asset('images/structure/menu.svg') }}" style="height: 30px; transition: all 0.3s ease;">
                </a>



                <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" id="navbarNav">
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
                        <li class="nav-item d-flex align-items-center" id="lastItem">
                            <a class="nav-link text-uppercase  {{ request()->routeIs('/') ? 'active-menu' : '' }}"
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
                            <li class="nav-item py-0 sub-link nav-link text-uppercase d-flex flex-wrap gap-3 justify-content-center" href="{{ route('home') }}">
                                <a class="nav-link text-uppercase"> Reštauračný system</a>
                                <a class="nav-link text-uppercase">Eshop</a>
                                <a class="nav-link text-uppercase">Systemové riešenia</a>
                                <a class="nav-link text-uppercase">Custom web</a>
                            </li>


                            <li class="nav-item px-3 py-3">
                                <a class="nav-link text-uppercase {{ request()->routeIs('/') ? 'active-menu' : '' }}"
                                   href="{{ route('home') }}">Referencie</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lastItem = document.getElementById("lastItem");
        const otherItems = document.querySelectorAll(".navbar-nav li:not(#lastItem)");
        const logo = document.querySelectorAll(".navbar-brand img");

        function checkScroll() {
            const width = lastItem.offsetWidth;
            if (window.scrollY > 50) {
                gsap.to(lastItem, { opacity: 1, y: 0, duration: 0.5, ease: "power1.out" });
                gsap.to(otherItems, { x: -10, duration: 0.5, ease: "power1.out" });
                gsap.to(logo, { duration: 0, rotation: "10php", ease: "power1.in" });
            } else {
                gsap.to(lastItem, { opacity: 0, y: -20, duration: 0.5, ease: "power3.out" });
                gsap.to(otherItems, { x: width / 2, duration: 0.5, ease: "power1.out" });
                gsap.to(logo, { duration: 0, rotation: "-10", ease: "power1.out" });
            }


        }

        window.addEventListener("scroll", checkScroll);
        checkScroll();
    });
</script>


