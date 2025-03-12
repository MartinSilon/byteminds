@extends('frontend.layouts.app')
@section('title', 'O nás')

@section('content')

    <div class="container-fluid text-white py-5 position-relative container-green headline-container "
         style="background-image: url('{{ asset( $photo->find(11)->getPath()) }}') ;">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">

                    <h2 class="fw-bold text-center " style="color: #f1b800">{{$text->find(21)->text1}}</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="siteBg py-5">
        <div class="container py-5 containerRadius bg-white">
            <div class="container p-5">
                <p class="mt-4 ">
                    {{$text->find(22)->text1}}
                </p>

            </div>


            <div class="row">
                @foreach ($employees as $person)
                    <div class="col-12 mb-4 p-5">
                        <div class="row align-items-center">
                            <!-- Fotka -->
                            <div class="col-12 col-md-3 justify-content-center mb-5 mb-md-0 text-center" style="overflow-x: hidden">
                                <img src="{{ asset('storage/' . $person->photo_path) }}" alt="{{ $person['name'] }}" class="shadow" height="300px">
                            </div>
                            <!-- Informácie o osobe -->
                            <div class="col-12 col-md-9">
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                                    <!-- Ľavá strana: Meno a pozícia -->
                                    <div>
                                        <h2 class="mb-1">{{ $person['name'] }}</h2>
                                        <h5 class="text-success mb-2">{{ $person['position'] }}</h5>
                                    </div>

                                    <!-- Pravá strana: E-mail a telefónne číslo -->
                                    <div class="text-md-end">
                                        <h5 class="italic mb-1 text-muted">{{ $person['email'] }}</h5>
                                        <h5 class="italic mb-0 text-muted">{{ $person['phonenumber'] }}</h5>
                                    </div>
                                </div>

                                <!-- Popis osoby -->
                                <p>{{ $person['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
