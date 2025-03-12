
<div id="carouselExampleIndicators" class="carousel slide mt-11">
    <div class="carousel-indicators">
        {{--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>--}}
    </div>
    <div class="carousel-inner h-100">
        <!-- Slide 1 -->

        @foreach ([
                                  ['photo' => asset('images/structure/imageCarousel.png'), 'title' => 'Spájame inovácie s udržateľnosťou!', 'desc' => 'Prinášame ekologické riešenia pre lepšiu budúcnosť. Objavte, ako môžeme spolu tvoriť udržateľný svet.', 'alt' => 'Slide 1', 'active' => 'active'],

                                  ] as $carousel)
            <div class="carousel-item {{$carousel['active']}} h-100">
                <img src="{{$carousel['photo']}}" class="d-block w-100 h-100 object-fit-cover" alt="{{$carousel['alt']}}">
                <div class="carousel-caption text-start animate-text">
                    <!-- Zelený blok -->
                    <div class="bg-green position-relative w-75 p-3 d-none d-lg-block">
                        <h2 class="fw-bold text-white">{{$carousel['title']}}</h2>
                        <p class="text-white ">{{$carousel['desc']}}</p>

                        <!-- Žlté bloky -->
                        <div class="yellow-block yellow-block-1"></div>
                        <div class="yellow-block yellow-block-2"></div>
                    </div>
                    <div class="bg-green position-relative  w-100 p-3 d-lg-none">
                        <h3 class="fw-bold text-white">{{$carousel['title']}}</h3>
                        <p class="text-white ">{{$carousel['desc']}}</p>

                        <!-- Žlté bloky -->
                        <div class="yellow-block yellow-block-1"></div>
                        <div class="yellow-block yellow-block-2"></div>
                    </div>
                </div>
            </div>


        @endforeach
    </div>
    {{--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>--}}
</div>

