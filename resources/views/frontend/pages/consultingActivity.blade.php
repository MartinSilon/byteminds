@extends('frontend.layouts.app')
@section('title', 'Poradenská činnosť')

@section('content')

    <!-- Sekcia Nadpisu -->
    <div class="container-fluid text-white py-5 position-relative container-green headline-container"
         style="background-image: url('{{ asset($photo->find(12)->getPath()) }}');">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold" style="color: #f1b800;">Poradenská činnosť</h2>
                    <p class="text-white">Pomáhame firmám, samosprávam a podnikateľom správne nakladať s odpadmi v súlade s legislatívou.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Obsahová sekcia -->
    <div class="siteBg py-5">
        <div class="container py-5 containerRadius bg-white">
            <div class="container p-5">

                <!-- Hlavná časť poradenstva -->
                <h3 class="fw-bold text-success">Poradíme vám ako:</h3>
                <p class="text-muted">Správne triediť a nakladať s odpadmi podľa platných legislatívnych noriem.</p>

                <div class="row mt-4">
                    @foreach ([
                        ['title' => 'Triedenie biologických odpadov', 'description' => 'Vytriediť biologicky rozložiteľné odpady zo zmesových komunálnych odpadov.'],
                        ['title' => 'Triedenie energeticky využiteľných odpadov', 'description' => 'Vytriediť energeticky využiteľné odpady zo zmesových komunálnych odpadov.'],
                        ['title' => 'Zhodnocovanie biologických odpadov', 'description' => 'Ako efektívne zhodnotiť biologicky rozložiteľné odpady.'],
                        ['title' => 'Zhromažďovanie odpadu vo firme', 'description' => 'Ako správne zhromažďovať odpady vo vašej firemnej prevádzke.'],
                        ['title' => 'Identifikačný list nebezpečných odpadov', 'description' => 'Ako správne vypracovať Identifikačný list nebezpečných odpadov.'],
                        ['title' => 'Evidencia odpadov', 'description' => 'Ako viesť evidenciu o nakladaní s odpadmi.'],
                        ['title' => 'Správne skladovanie odpadu', 'description' => 'Ako správne triediť a skladovať odpady vo vašej prevádzke.'],
                        ['title' => 'Zhodnocovanie stavebných odpadov', 'description' => 'Ako efektívne zhodnotiť stavebné a demolačné odpady.'],
                        ['title' => 'Predchádzanie vzniku stavebných odpadov', 'description' => 'Ako predchádzať vzniku stavebných a demolačných odpadov.'],
                    ] as $service)
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow h-100 p-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle me-3 d-flex justify-content-center align-items-center" >
                                        <i class="bi bi-check-circle-fill " style="font-size: 24px;"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0">{{ $service['title'] }}</h5>
                                </div>
                                <p class="mt-2 text-muted">{{ $service['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Sekcia pre odvoz nebezpečných odpadov -->
                <h3 class="fw-bold text-success mt-5">Zabezpečíme vám odvoz nebezpečných odpadov:</h3>

                <ul class="list-group mt-3">
                    <li class="list-group-item border-0">
                        <i class="bi bi-truck text-warning me-2"></i> Jednorázovo na základe vašej požiadavky (platíte celú vami objednanú dopravu).
                    </li>
                    <li class="list-group-item border-0">
                        <i class="bi bi-calendar-check text-warning me-2"></i> Pravidelne štvrťročne, polročne, ročne v zvozovom okruhu pre skupinu zákazníkov (platíte len paušálnu časť dopravy).
                    </li>
                    <li class="list-group-item border-0">
                        <i class="bi bi-recycle text-warning me-2"></i> Vyhľadáme zariadenie schopné legislatívne správne zhodnotiť alebo zneškodniť vaše odpady.
                    </li>
                </ul>

                <!-- Nábor obchodných zástupcov -->
                <h3 class="fw-bold text-success mt-5">Hľadáme obchodných zástupcov</h3>
                <p class="text-muted">
                    Vyznáte sa v obchode, v odpadoch alebo v legislatíve odpadov? Máte priateľov v priemysle, poľnohospodárstve, službách či samosprávach?
                    Ak áno, ozvite sa nám! Môžete sa stať naším regionálnym obchodným zástupcom.
                </p>

                <div class="text-center mt-4">
                    <a href="{{ route('contacts') }}" class="btn btn-warning text-white fw-bold px-4 py-2">Kontaktujte nás</a>
                </div>
            </div>
        </div>
    </div>

@endsection
