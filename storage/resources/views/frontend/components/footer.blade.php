<footer class="container-fluid bg-dark text-white py-5 bottom">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold">O nás</h5>
                <p class="footer-text">
                    Naša spoločnosť sa zameriava na poskytovanie kvalitných služieb
                    a produktov, ktoré zlepšujú životy našich zákazníkov. Naším cieľom je dosahovať dokonalosť
                    vo všetkom, čo robíme, a byť vaším spoľahlivým partnerom.
                </p>
            </div>

            <!-- Links Section -->
            <div class="col-lg-3 col-md-6 mb-4 offset-lg-1">
                <h5 class="fw-bold footer-title">Navigácia</h5>
                <ul class="list-unstyled ">
                    <li><a href="{{ route('home') }}" class="text-decoration-none footer-link ">Domov</a></li>
                    <li><a href="{{ route('about') }}" class="text-decoration-none footer-link">O nás</a></li>
                    <li><a href="{{ route('documents') }}" class="text-decoration-none footer-link">Dokumenty</a></li>
                    <li><a href="{{ route('contacts') }}" class="text-decoration-none footer-link">Kontakt</a></li>

                </ul>
            </div>

            <!-- Services Section -->
           {{-- <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold footer-title">Services</h5>
                <ul class="list-unstyled ">
                    <li><a href="#" class="text-decoration-none ">Grocery Store</a></li>
                    <li><a href="#" class="text-decoration-none ">Hotel & Restaurant</a></li>
                    <li><a href="#" class="text-decoration-none ">Medical & Hospital</a></li>
                    <li><a href="#" class="text-decoration-none ">Waste Removal</a></li>
                    <li><a href="#" class="text-decoration-none ">Zero Waste</a></li>
                </ul>
            </div>--}}

            <!-- Contact Section -->
            <div class="col-lg-3 offset-lg-0 col-md-6">
                <h5 class="fw-bold footer-title">Kontakt</h5>
                <ul class="list-unstyled footer-text">
                    <li class="mb-1 mt-1 d-flex align-items-center">
                        <i class="bi bi-building one-fill text-success me-2 "></i>
                        {{$text->find(23)->text1}}
                    </li>
                    <li class="mb-1 d-flex align-items-center">
                        <i class="bi bi-telephone one-fill text-success me-2 "></i>
                        {{$text->find(24)->text1}}
                    </li>
                    <li class="mb-1 d-flex align-items-center">
                        <i class="bi bi-envelope-fill text-success me-2 "></i>
                        {{$text->find(25)->text1}}
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill text-success me-2 footer-text"></i>
                        {{$text->find(26)->text1}}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center mt-5 pt-4 border-top border-secondary">
        <p class="mb-0 ">Copyright ©<?php
                                    $year = date("Y");
                                    echo $year;
                                    ?> <span class="text-success fw-bold">New Green Company, družstvo</span>. Všetky práva vyhradené. Vytvorilo
            <a href="https://www.byteminds.sk" target="_blank" class="fw-bold text-success decoration-0">Byteminds.sk</a></p>
    </div>
</footer>

