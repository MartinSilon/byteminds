
<div id="carouselExampleIndicators" class="carousel slide mt-11">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner h-100">
        <!-- Slide 1 -->

        @foreach ([
                                  ['photo' => 'https://picsum.photos/1920/1080', 'title' => 'Welcome to Our Service', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere dapibus arcu eu pharetra. Ut cursus ante quis dapibus molestie. Donec finibus eleifend ipsum', 'alt' => 'Slide 1', 'active' => 'active'],
                                  ['photo' => 'https://picsum.photos/1921/1081', 'title' => 'Efficient Waste Collection', 'desc' => 'A fringilla magna pretium quis. Vivamus volutpat ante risus, ut euismod nunc suscipit a. Phasellus rhoncus mollis leo a scelerisque. Donec at lacus finibus,.','alt' => 'Slide 2', 'active' => ' '],
                                  ['photo' => 'https://picsum.photos/1921/1079', 'title' => 'Eco-Friendly Recycling', 'desc' => 'venenatis nisl et, suscipit leo. Suspendisse mattis ipsum augue, quis rutrum odio varius eu. Suspendisse dignissim mauris a cursus efficitur. Sed cursus massa in quam vulputate dictum.','alt' => 'Slide 3', 'active' => ' ']
                                  ] as $carousel)
            <div class="carousel-item {{$carousel['active']}} h-100">
                <img src="{{$carousel['photo']}}" class="d-block w-100 h-100 object-fit-cover" alt="{{$carousel['alt']}}">
                <div class="carousel-caption text-start animate-text">
                    <!-- Zelený blok -->
                    <div class="bg-green position-relative w-50 p-4 d-none d-lg-block">
                        <h2 class="fw-bold text-white">{{$carousel['title']}}</h2>
                        <p class="text-white ">{{$carousel['desc']}}</p>

                        <!-- Žlté bloky -->
                        <div class="yellow-block yellow-block-1"></div>
                        <div class="yellow-block yellow-block-2"></div>
                    </div>
                    <div class="bg-green position-relative  w-100 p-4 d-lg-none">
                        <h2 class="fw-bold text-white">{{$carousel['title']}}</h2>
                        <p class="text-white ">{{$carousel['desc']}}</p>

                        <!-- Žlté bloky -->
                        <div class="yellow-block yellow-block-1"></div>
                        <div class="yellow-block yellow-block-2"></div>
                    </div>
                </div>
            </div>


        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

