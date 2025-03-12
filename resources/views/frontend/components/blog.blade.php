<div class="row justify-content-center">
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

<div class="text-center mt-4">
    <a href="{{ route('blog') }}" class="btn btn1">Zobraziť všetky články</a>
</div>
