
<div class="container my-5 mb-0 containerRadius bg-white p-5">
    <div class="row align-items-center">
        <!-- Obrázky -->
        <div class="col-lg-6">
            <div class="d-flex flex-column justify-content-center position-relative">
                <div class="image-container mb-3 position-relative">
                    <img src="{{ asset( $photo->find(9)->getPath()) }}" alt="Image 1" class="img-fluid rounded">
                    <div class="white-square position-absolute"></div>
                </div>
            </div>
        </div>

        <!-- Text a Progress Bary -->
        <div class="col-lg-6">
            <p class="text-success fw-bold">{{$text->find(7)->text1}}</p>
            <h2 class="fw-bold">{{$text->find(7)->text2}}</h2>
            <p class="text-muted">
                {{$text->find(7)->text3}}
            </p>

            <!-- Progress Bars -->
            <div class="progress-wrapper mt-4">
                <p class="fw-bold">{{$text->find(8)->text1}}</p>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-warning" data-target="{{$text->find(8)->text2}}" style="width: 0%;" role="progressbar"></div>
                </div>
                <p class="text-end text-muted small">{{$text->find(8)->text2}}%</p>
            </div>
            <div class="progress-wrapper mt-3">
                <p class="fw-bold">{{$text->find(9)->text1}}</p>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-warning" data-target="90" style="width: 0%;" role="progressbar"></div>
                </div>
                <p class="text-end text-muted small">{{$text->find(9)->text2}}%</p>
            </div>


            <!-- Zoznam s ikonami -->
            <ul class="list-unstyled mt-4">
                @foreach(array_slice(explode("/", $text->find(10)->text1), 0, 4) as $line)
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle-fill text-warning me-2"></i>
                        <span>{{ $line }}.</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
