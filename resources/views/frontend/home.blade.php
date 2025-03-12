@extends('frontend.layouts.app')
@section('title', 'Systémové riešenia | Byteminds - rýchle a spoľahlivé riešenia')

@section('content')
    <div class="container-fluid px-3 pt-3">
        <header class="slider" style="">
            <div class="container">
                <div class="row px-5">
                    <div class="col-12 text-col d-flex justify-content-center">
                        <h6 class="w-50 text-center my-5" id="header-text">
                            Explore entire user journeys with flows.
                        </h6>
                    </div>

                    <div class="col-md-6">
                        <div class="box">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">

                        </div>
                    </div>
                </div>
            </div>
        </header>


        <script>
            gsap.from("#header-text", {
                duration: 1,
                y: -50,
                opacity: 0,
                ease: "bounce.out"
            });
        </script>
@endsection
