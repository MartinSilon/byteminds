@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('content')

    <!-- Header Section -->
    <div class="container-fluid text-white py-5 position-relative container-green headline-container"
         style="background-image: url('{{ asset( $photo->find(14)->getPath()) }}');">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="fw-bold text-center" style="color: #f1b800;">{{$text->find(36)->text1}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 mb-0 containerRadius p-3 p-md-5">
        <div class="row">
            @if(count($clanky) > 0)
                @foreach($clanky as $item)
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm border-0 h-100">
                            <img src="{{ asset($item->getMiniature()) }}" class="card-img-top" alt="{{ $item->title }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{!! $item->title !!}</h5>
                                <p class="text-muted small">Publikované: {{ $item->created_at->translatedFormat('d. F Y') }}</p>
                                <p class="card-text flex-grow-1" style="height: 100px; overflow-y: hidden">{!! $item->text1 !!}...</p>
                                <a href="{{ route('articleblog', ['slug' => $item->slug]) }}" class="btn btn-warning text-white mt-auto">Čítať viac</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h5 class="text-center my-5 pb-5" style="color: #3d5a41">Na článkoch pracujeme! </h5>
            @endif

        </div>

    </div>

@endsection
