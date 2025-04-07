@extends('frontend.layouts.app')
@section('title', 'Systémové riešenia | Byteminds - rýchle a spoľahlivé riešenia')

@section('content')
    <header class="section section__header" style="">
        <div class="container">
            <div class="row px-md-5">
                <div class="col-12 text-header d-flex flex-column justify-content-center align-items-center my-5">
                    <h6 class="section-title text-center mb-2" id="header-text">
                        Optimalizujte svoje procesy
                    </h6>
                    <p>Inovatívne aplikácie, ktoré vám pomôžu rásť a šetriť zdroje.</p>
                </div>

                <a href="#" class="col-md-12 mb-4 ">
                    <div class="box box__bottom p-5 d-flex flex-column justify-content-between">
                        <h4 class="text-center text-uppercase"> Inovatívne <span>webové aplikácie</span> pre váš rast</h4>
                        <p class="text-center subtitle">Moderný dizajn, robustná bezpečnosť a špičkové funkcie – všetko, čo potrebuješ pre efektívnu online prítomnosť a technologický pokrok.</p>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <img class="img-fluid" src="{{ asset('images/uploads/imac.png') }}" alt="">

                            </div>
                            <div class="col-md-6 d-md-block d-none">
                                <img class="img-fluid" src="{{ asset('images/uploads/imac2.png') }}" alt="">
                            </div>
                        </div>
                        <p class="description">
                            Náš tím vývojárov a dizajnérov prináša funkčne orientované a jedinečné riešenia, ktoré zlepšujú používateľský zážitok a posúvajú tvoj biznis na novú úroveň. Vďaka moderným technológiám a dlhoročným skúsenostiam zabezpečujeme plynulý chod aplikácií, vysokú bezpečnosť a škálovateľnosť pre budúci rast.
                        </p>
                    </div>
                </a>

                <a href="#" class="col-md-6 mb-4 mb-md-0">
                    <div class="box box__left p-5 d-flex flex-column justify-content-between">
                        <h4 class="text-center text-uppercase">Nový <span>web? </span>Nová príležitosť!</h4>
                        <div class="position-relative">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 4.png') }}" alt="">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 41.png') }}" alt="">
                            <img class="img-fluid py-5 px-4 absolute" src="{{ asset('images/uploads/Scene 42.png') }}" alt="">

                        </div>
                        <p class="description">
                            Vytvoríme pre vás profesionálnu webovú stránku, ktorá buduje dôveru, vyvoláva pozitívne emócie a priláka nových zákazníkov. Spojte sa s nami a posuňte svoje online pôsobenie na vyššiu úroveň.
                        </p>
                    </div>
                </a>
                <a href="#"  class="col-md-6 mb-4 mb-md-0">
                    <div class="box box__right p-5">
                        <h4 class="text-center  text-uppercase">Komplexný <span>servis</span> pre váš existujúci web</h4>
                        <div class="position-relative">
                            <img class="img-fluid py-3" src="{{ asset('images/uploads/websites.png') }}" alt="">

                        </div>
                        <p class="description">
                            Postaráme sa o pravidelné aktualizácie, bezpečnostné záplaty a moderný dizajn, aby váš web vždy zodpovedal najnovším trendom. Nechajte starosti na nás a sústreďte sa na rozvoj svojho biznisu.
                        </p>
                    </div>
                </a>

            </div>
        </div>
    </header>


{{--    <section class="section section__contact-us">--}}
{{--        <div class="container px-5">--}}
{{--            <div class="row box px-md-5">--}}
{{--                <div class="col-12 text-center py-4">--}}
{{--                    <h3 class="section-title section-title__medium">SME V TOM S VAMI</h3>--}}
{{--                    <h5 class="section-title section-title__small">Napíšte nám</h5>--}}
{{--                    <a class="px-5 py-2 btn btn__1 mt-2" href="#kontakt">KONTAKTUJTE NÁS</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



    <section class="section section__clients">
        <div class="container">
            <div class="scroll-container">
                <h6 class="section-title__medium fw-bold text-center text-uppercase py-4 pb-1">
                    Značky, ktoré nám veria
                    <div class="section-title__medium text-center fw-normal">Pozri sa, ako spolu tvoríme hodnotu.</div>
                </h6>



                <div class="project-container">
                    <!-- Druhý obrázok -->
                    <div href="#" class="client-div">
                        <img src="{{ asset('images/uploads/origami_header.png') }}" alt="" CLASS="img-fluid">
                        <a href="#" class="client-div__button text-center mt-4 px-5 py-4">
                            <span class="button-content">
                                OTVORIŤ PROJEKT
                            </span>
                        </a>
                    </div>
                    <!-- Prvý obrázok -->
                    <div href="#" class="client-div">
                        <img src="{{ asset('images/uploads/pub_u_joza_header.png') }}" alt="" CLASS="img-fluid">
                        <a href="#" class="client-div__button text-center mt-4 px-5 py-4">
                            <span class="button-content">
                                OTVORIŤ PROJEKT
                            </span>
                        </a>
                    </div>
                    <!-- Druhý obrázok -->
                    <div href="#" class="client-div">
                        <img src="{{ asset('images/uploads/origami_header.png') }}" alt="" CLASS="img-fluid">
                        <a href="#" class="client-div__button text-center mt-4 px-5 py-4">
                            <span class="button-content">
                                OTVORIŤ PROJEKT
                            </span>
                        </a>
                    </div>
                    <!-- Prvý obrázok -->
                    <div href="#" class="client-div">
                        <img src="{{ asset('images/uploads/pub_u_joza_header.png') }}" alt="" CLASS="img-fluid">
                        <a href="#" class="client-div__button text-center mt-4 px-5 py-4">
                            <span class="button-content">
                                OTVORIŤ PROJEKT
                            </span>
                        </a>
                    </div>
                    <!-- Prvý obrázok -->
                    <div href="#" class="client-div client-div__blue py-5 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="fw-bold">TU MÔŽETE MAŤ PROJEKT VY</h3>
                        <a href="#" class="client-div__button text-center mt-4 px-5 py-4">
                            <span class="button-content">
                                PRIHLÁSIŤ SA NA KONZULTÁCIU
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="section section__timeline">
        <div class="container px-5">
            <div class="row justify-content-between box">
                <div class="col-7 px-md-5 ps-0 h-100 ">
                    <h6 class="section-title__medium fw-bold text-center mt-5 mb-0 text-uppercase" id="header-text">
                        Ak to viete vymyslieť,
                    </h6>
                    <h6 class="section-title__medium fw-bold text-center mb-5 text-uppercase" id="header-text">
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
                <div class="col-md-5 pt-5 d-flex justify-content-center">
                    <img class="" src="{{ asset('images/uploads/iphone.png') }}" alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="section section_beClient mt-5">
        <div class="container px-5">
            <div class="row p-md-5 box justify-content-center">
                <div class="col-8 text-center d-flex flex-column justify-content-evenly align-items-center">
                    <h5>GROW BUSINESS</h5>
                    <h3>Join our partner network to implement, extend or develop the
                        best deskless worker apps.
                    </h3>
                    <p>
                        Deskless workers make up 80% of the workforce worldwide. Extend your solutions to this fast-growing market by becoming a Jigx partner.
                    </p>
                    <a class="px-5 py-3" href="">
                        <span class="button-content">
                            Staňte sa Byteminds partnerom
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                           </svg>
                        </span>

                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script src="{{asset('js/frontend/horizontal-scroll.js')}}"></script>
    <script>
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
                }
            }
        );



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
        gsap.from(".box__bottom img", {
            scrollTrigger: {
                trigger: ".box__bottom",
                start: "top 60%",
            },
            y: 90,
            delay: 1.5,
            duration: 1,
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



    </script>
@endsection
