@extends('frontend.layouts.app')
@section('title', 'Blog | '.$blog->title)

@section('content')

    <!-- Header Section -->
    <div class="container-fluid text-white py-5 position-relative container-green headline-container"
         style="background-image: url('{{ asset( $blog->getHeaderPath()) }}');">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h1 class="fw-bold mb-3 text-white">{{ $blog->title }}</h1>
                    <p class="small">Publikované: <strong>{{ $blog->created_at->translatedFormat('d. F Y') }}</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid siteBg pt-md-5 pb-5">
        <div class="container containerRadius bg-white p-5">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- Prvý obrázok v článku -->
                    <div class="text-center my-4">
                        <img src="{{ asset($blog->getPath1()) }}" class="img-fluid rounded shadow" alt="{{ $blog->path1_description }}">
                        <p class="text-muted small mt-2">{{ $blog->path1_description }}</p>
                    </div>
                </div>
                <div class="col-lg-7 mx-auto">
                    <!-- Obsah článku -->
                    <p class="lead">{!! $blog->text1  !!}</p>
                </div>
                <div class="col-12">
                    {!! $blog->text2  !!}

                    <!-- Druhý obrázok v článku -->
                    <div class="text-center my-4">
                        <img src="{{ asset($blog->getPath2()) }}" class="img-fluid rounded shadow" alt="{{ $blog->path2_description }}">
                        <p class="text-muted small mt-2">{{ $blog->path2_description }}</p>
                    </div>

                    {!! $blog->text3  !!}

                    <!-- Tlačidlo na návrat na hlavnú stránku blogu -->
                    <div class="text-center my-5">
                        <a href="{{ route('blog') }}" class="btn btn-outline-success">← Späť na blog</a>
                    </div>
                </div>
            </div>
        </div>

        @if(count($blogs) > 0)
        <div class="container containerRadius bg-white p-5 mt-5">
            <!-- Súvisiace články -->
            <h3 class="mb-5">Ďalšie články</h3>
            <div class="row">
                @foreach($blogs as $item)
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <img src="{{ asset($item->getMiniature()) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{!! $item->title !!}</h5>
                            <p class="text-muted small">Publikované: {{ $item->created_at->translatedFormat('d. F Y') }}</p>
                            <p class="card-text flex-grow-1" style="height: 100px; overflow-y: hidden">{!! $item->text1 !!}</p>
                            <a href="{{ route('articleblog', ['slug' => $item->slug]) }}" class="btn btn-warning text-white mt-auto">Čítať viac</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

@endsection
