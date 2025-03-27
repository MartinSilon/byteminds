@extends('frontend.layouts.app')
@section('title', 'Systémové riešenia | Byteminds - rýchle a spoľahlivé riešenia')

@section('content')
    <header class="section" style="">
        <div class="container">
            <div class="row px-md-5">
                <div class="col-12 text-col d-flex justify-content-center">
                    <h6 class="section-title w-75 text-center my-5" id="header-text">
                        Revolučne transformujte svoj biznis s našimi softvérovými riešeniami.
                    </h6>
                </div>

                <a href="#" class="col-md-12 mb-4">
                    <div class="box box__bottom p-5 d-flex flex-column justify-content-between">
                        <h4 class="text-center text-uppercase"> <span>WEBAPLIKÁCIE,</span> Spolu za technologickým pokrokom </h4>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{ asset('images/uploads/imac.png') }}" alt="">

                            </div>
                            <div class="col-md-6 d-md-block d-none">
                                <img class="img-fluid" src="{{ asset('images/uploads/imac2.png') }}" alt="">

                            </div>
                        </div>
                        <p>
                            Naša skúsená tím vývojárov a dizajnérov je pripravený vytvoriť funkčne orientované, jedinečné riešenie, ktoré zlepší vašu online prítomnosť. Moderný dizajn, optimalizovaná funkčnosť a robustné bezpečnostné štandardy zaručia plynulý zážitok pre používateľov a posunú váš biznis vpred. Spoločne dosiahneme technologický pokrok, ktorý inšpiruje, motivuje a podporí trvalý rast vašej značky.
                        </p>
                    </div>
                </a>
                <a href="#" class="col-md-6 mb-4 mb-md-0">
                    <div class="box box__left p-5 d-flex flex-column justify-content-between">
                        <h4 class="text-center text-uppercase">Snívate o <span>novom webe?</span></h4>
                        <div class="position-relative">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 4.png') }}" alt="">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 41.png') }}" alt="">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 42.png') }}" alt="">

                        </div>
                        <p>
                            Navrhneme pre vás modernú stránku, ktorá buduje dôveru, vyvoláva pozitívne emócie a zaujme aj tých najnáročnejších návštevníkov, aby sa stali vašimi vernými zákazníkmi.
                        </p>
                    </div>
                </a>
                <a href="#"  class="col-md-6 mb-4 mb-md-0">
                    <div class="box box__right p-5">
                        <h4 class="text-center  text-uppercase">Komplexný <span>servis</span> aktuálneho webu?</h4>
                        <div class="position-relative">
                            <img class="img-fluid py-3" src="{{ asset('images/uploads/websites.png') }}" alt="">

                        </div>
                        <p>
                            Oživíme a udržiavame vašu online prezentáciu pomocou rýchlych aktualizácií, bezpečnostných záplat a moderného dizajnu, aby vás zákazníci nezabudli pre trvalý úspech.
                        </p>
                    </div>
                </a>

            </div>
        </div>
    </header>


    <section class="section section__2">
        <div class="container px-5">
            <div class="row box px-md-5">
                <div class="col-12 text-center py-4">
                    <h3 class="section-title section-title__medium">SME V TOM S VAMI</h3>
                    <h5 class="section-title section-title__small">NAPÍŠTE NÁM</h5>
                    <a class="px-5 py-2 btn btn__1 mt-2" href="#kontakt">KONTAKTUJTE NÁS</a>
                </div>
            </div>
        </div>
    </section>



    <section class="section section__1">
        <div class="container px-5">
            <div class="row justify-content-between">

                <div class="col-4 ps-0  h-100">
                    <div class="px-md-5 box  h-100">
                        <h6 class="section-title__medium fw-bold text-center mt-5 mb-0 text-uppercase" id="header-text">
                            Ak to viete vymyslieť,
                        </h6>
                        <h6 class="section-title__medium section-title__blue fw-bold text-center mb-5 text-uppercase" id="header-text">
                            my to vieme urobiť.
                        </h6>

                        <!-- Časová os (Timeline) -->
                        <div class="timeline">
                            <div class="timeline-item" data-step="1">
                                <div class="timeline-marker">1</div>
                                <div class="timeline-content">
                                    <h6 class="section-title__small fw-bold">Spoznávame vás</h6>
                                    <p class="section-title__min fs-6">
                                        Pred začatím musíme plne rozumieť tomu, čo robíte.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item" data-step="2">
                                <div class="timeline-marker">2</div>
                                <div class="timeline-content">
                                    <h6 class="section-title__small fw-bold">Overenie konceptu</h6>
                                    <p class="section-title__min fs-6">
                                        Vaše potreby a rozpočet sú na prvom mieste. Zosúladíme našu ponuku, aby sme vám našli najvhodnejšie riešenie.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item" data-step="3">
                                <div class="timeline-marker">3</div>
                                <div class="timeline-content">
                                    <h6 class="section-title__small fw-bold">Objavovanie a dizajn</h6>
                                    <p class="section-title__min fs-6">
                                        V tejto relácii dostanete kompletný balík dizajnu.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item" data-step="4">
                                <div class="timeline-marker">4</div>
                                <div class="timeline-content">
                                    <h6 class="section-title__small fw-bold">Vývoj riešení</h6>
                                    <p class="section-title__min fs-6">
                                        Vždy sme agilní a budeme spolupracovať s vaším tímom na vytváraní štíhlych riešení riadených procesmi a údajmi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="box">
                        <h6 class="section-title__medium fw-bold text-center mt-5 mb-0 text-uppercase" id="header-text">
                            Naši klienti
                        </h6>
                    </div>

                </div>


                <!-- Obrázok s vertikálnou orientáciou -->

            </div>
        </div>
    </section>





    <script>
        gsap.registerPlugin(ScrollTrigger);




        gsap.fromTo(
            ".box__left",
            { x: -150, scale: 0.9, },
            {
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.4,
                ease: "none",
                scrollTrigger: {
                    trigger: ".box__left",
                    start: "top 80%",
                    toggleActions: "play reverse play reverse"
                }
            }
        );

        gsap.fromTo(
            ".box__right",
            { x: 150, scale: 0.9, },
            {
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.4,
                ease: "none",
                scrollTrigger: {
                    trigger: ".box__right",
                    start: "top 80%",
                    toggleActions: "play reverse play reverse"
                }
            }
        );




        document.addEventListener("DOMContentLoaded", function () {

            const tl = gsap.timeline();

            gsap.from(".box__left img", {
                opacity: 0,
                delay: 0.5,
                x: -50,
                scale: 0.9,
                duration: 0.7,
                ease: "power2.out",
            });

            gsap.from(".box__right img", {
                opacity: 0,
                delay: 0.5,
                x: 50,
                scale: 0.9,
                duration: 0.7,
                ease: "power2.out",
            });




            function addMouseEffects(boxSelector, imgSelector) {
                const box = document.querySelector(boxSelector);
                const img = document.querySelector(imgSelector);

                if (!box || !img) return;

                box.addEventListener("mousemove", function (e) {
                    const { clientX: x, clientY: y } = e;
                    const rect = box.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;

                    gsap.to(img, {
                        x: (x - centerX) * 0.02,
                        y: (y - centerY) * 0.02,
                        duration: 0.5,
                        ease: "power2.out"
                    });
                });

                box.addEventListener("mouseleave", function () {
                    gsap.to(img, {
                        x: 0,
                        y: 0,
                        duration: 0.5,
                        ease: "power2.out"
                    });
                });
            }

            addMouseEffects(".box__left", ".box__left img.absolute");
            addMouseEffects(".box__right", ".box__right img");
        });




        // box__bottom
        gsap.from(".box__bottom img", {
            scrollTrigger: {
                trigger: ".box__bottom",
                start: "top 60%",
                toggleActions: "play reverse play reverse"
            },
            y: 90,
            delay: 1.5,
            duration: 1,
        });

    </script>
@endsection
