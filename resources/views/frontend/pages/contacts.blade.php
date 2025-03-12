@extends('frontend.layouts.app')
@section('title', 'Kontakt')

@section('content')
    <div class="siteBg">

    <!-- Header Section -->
    <div class="container-fluid text-white py-5 position-relative container-green headline-container"
         style="background-image: url('{{ asset( $photo->find(13)->getPath()) }}');">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="fw-bold text-center" style="color: #f1b800;">{{$text->find(32)->text1}}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.7942862512023!2d18.736346092371!3d49.22342830117213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47145ea7d6af09b5%3A0x3e46097f4f557a3!2zSG9ybsO9IFZhbCA4LzE3LCAwMTAgMDEgxb1pbGluYQ!5e0!3m2!1ssk!2ssk!4v1738970955241!5m2!1ssk!2ssk"  width="100%" style="border:0;" allowfullscreen="" class="map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>



    <div class="container my-5 mb-0 containerRadius p-3 p-md-5">
        <div class="row align-items-center">
            <!-- Text a Progress Bary -->
            <div class="col-lg-5">
                <p class="text-success fw-bold">{{$text->find(17)->text1}}</p>
                <h2 class="fw-bold">{{$text->find(17)->text2}}</h2>
                <p class="text-muted">
                    {{$text->find(17)->text3}}</p>

                <ul class="list-unstyled mt-5">
                    @foreach ([
                    ['icon' => 'bi-cash-stack', 'title' => $text->find(28)->text1, 'mail' => $text->find(28)->text2, 'telephone' => $text->find(28)->text3],
                    ['icon' => 'bi-journals', 'title' => $text->find(29)->text1, 'mail' => $text->find(29)->text2, 'telephone' => $text->find(29)->text3],
                    ['icon' => 'bi-receipt', 'title' => $text->find(30)->text1,'mail' => $text->find(30)->text2, 'telephone' => $text->find(30)->text3],
                     ['icon' => 'bi-tools', 'title' => $text->find(31)->text1,'mail' => $text->find(31)->text2, 'telephone' => $text->find(31)->text3],
                      ['icon' => 'bi-geo-alt', 'title' => $text->find(34)->text1,'mail' => $text->find(34)->text2, 'telephone' => $text->find(34)->text3]
                                            ] as $contact)
                    <li>
                        <div class="d-flex justify-content-center align-items-center icon-circle mb-2">
                            <i class="bi {{ $contact['icon'] }}"></i>
                        </div>
                        <div>
                            <p class="mb-0"><strong>{{ $contact['title'] }}</strong></p>
                            <a class="text-decoration-none text-dark" href="mailto:{{ $contact['mail'] }}"><p class="mb-0">{{ $contact['mail'] }}</p></a>
                            <p>{{ $contact['telephone'] }}</p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-6 offset-lg-1 bg-white p-3 p-md-5 containerRadius">
                <h2 class="fw-bold">Kontaktuje nás</h2>
                <div class="container-fluid">
                    @if (session('success'))
                        <div class="alert alert-success" id="alert">
                            <p class="p-0 m-0">{{ session('success') }}</p>
                        </div>
                    @endif
                </div>
                <form action="{{ route('send.contact.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Meno</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ján" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Priezvisko</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Celý" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Zadajte e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefónne číslo</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Zadajte telefónne číslo">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Predmet</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Predmet" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Vaša správa</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Zadajte vašu správu" required></textarea>
                    </div>
                    <button type="submit" class="mt-3 btn btn-warning text-white fw-bold w-100">Odoslať správu</button>


                </form>
            </div>
        </div>
    </div>

@endsection
