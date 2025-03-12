@extends('frontend.layouts.app')
@section('title', 'Domov')
@section('content')
    <!-- Carousel -->
    @include('frontend.components.carousel')

    <!-- Sekcia o nás -->
    <div class="container-fluid siteBg pt-5 pb-5 ">
        <div class="container containerRadius bg-white p-5">
            <div class="row justify-content-center text-center text-lg-start">
                <!-- Prvý stĺpec -->
                    <div class="col-12 col-lg-3 pt-3 pb-3 offset-lg-0">
                        <div class="d-flex align-items-start">
                            <div class="icon-container me-3">
                                <i class="bi bi-person-raised-hand"></i>
                            </div>
                            <div>
                                <h5 class="mt-0">{{$text->find(4)->text1}}</h5>
                                <p class="text-muted mb-0">
                                    {{$text->find(4)->text2}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 pt-3 pb-3 offset-lg-1">
                        <div class="d-flex align-items-start">
                            <div class="icon-container me-3">
                                <i class="bi bi-recycle"></i>
                            </div>
                            <div>
                                <h5 class="mt-0">{{$text->find(5)->text1}}</h5>
                                <p class="text-muted mb-0">
                                    {{$text->find(5)->text2}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 pt-3 pb-3 offset-lg-0">
                        <div class="d-flex align-items-start">
                            <div class="icon-container me-3">
                                <i class="bi bi-shop"></i>
                            </div>
                            <div>
                                <h5 class="mt-0">{{$text->find(6)->text1}}</h5>
                                <p class="text-muted mb-0">
                                    {{$text->find(6)->text2}}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Sekcia obrázkov a textu -->
        @include('frontend.components.loadbar')
    </div>

    <!-- Sekcia služieb -->
    <div class="container-fluid text-white py-5 position-relative container-green"
         style="background-image: url('{{ asset($photo->find(10)->getPath()) }}') !important; background-size: cover; background-position: center center">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <h5 class="text-warning fw-bold"> {{$text->find(11)->text1}}</h5>
                    <h2 class="fw-bold">{{$text->find(11)->text2}}</h2>
                    <p>
                        {{$text->find(11)->text3}}
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <button class="c">{{$text->find(16)->text1}}</button>
                </div>
            </div>
        </div>

        <!-- Karty služieb -->
        <div class="container position-relative card-container">
            <div class="row">
                <!-- Služby -->
                    <div class="col-lg-3 col-md-6 card-service mt-4 mt-md-0 mb-4 mb-md-0">
                        <div class="card service-card p-3 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <div class="icon mb-5">
                                    <i class="bi bi-trash text-success" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{$text->find(12)->text1}}</h5>
                                <p class="card-text text-muted">{{$text->find(12)->text2}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 card-service mt-4 mt-md-0 mb-4 mb-md-0">
                        <div class="card service-card p-3 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <div class="icon mb-5">
                                    <i class="bi bi-cart4 text-success" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{$text->find(13)->text1}}</h5>
                                <p class="card-text text-muted">{{$text->find(13)->text2}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 card-service mt-4 mt-md-0 mb-4 mb-md-0">
                        <div class="card service-card p-3 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <div class="icon mb-5">
                                    <i class="bi bi-person text-success" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{$text->find(14)->text1}}</h5>
                                <p class="card-text text-muted">{{$text->find(14)->text2}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 card-service mt-4 mt-md-0 mb-4 mb-md-0">
                        <div class="card service-card p-3 shadow-sm h-100">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                <div class="icon mb-5">
                                    <i class="bi bi-recycle text-success" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{$text->find(15)->text1}}</h5>
                                <p class="card-text text-muted">{{$text->find(15)->text2}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
