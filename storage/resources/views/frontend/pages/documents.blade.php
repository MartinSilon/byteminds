@extends('frontend.layouts.app')
@section('title', 'Dokumenty')

@section('content')


    <div class="container-fluid text-white py-5 position-relative container-green headline-container "
         style="background-image: url('https://picsum.photos/1920/600') ;">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="fw-bold text-center " style="color: #f1b800">Dokumenty</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="siteBg py-5">
        <div class="container py-5 containerRadius bg-white">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <p class="text-muted">Prezrite si naše povolenia a ďalšie relevantné dokumenty priamo na tejto stránke.</p>
                    </div>
                </div>

                <div class="row">
                    <!-- Zoznam dokumentov -->
                    <div class="col-12 col-md-4 h-100">
                        <ul class="list-group">
                            @foreach ([
                                ['title' => 'Potvrdenie o registrácii v oblasti odpadového hospodárstva', 'file' => "povolenia/registracia_v_oblasti_odpadoveho_hospodarstva.pdf"],
                                ['title' => 'Potvrdenie o registrácii a oprávnení na činnosti v oblasti odpadového hospodárstva', 'file' => 'povolenia/registracia_a_opravnenie_na_cinnosti_v_odpadovom_hospodarstve.pdf'],
                                ['title' => 'Certifikát kvality', 'file' => 'path_to_pdf3.pdf'],
                                ['title' => 'Štatút spoločnosti', 'file' => 'path_to_pdf4.pdf'],
                            ] as $document)
                                <li class="list-group-item">
                                    <a href="#" class="document-link text-decoration-none text-success " data-file="{{ $document['file'] }}">
                                        {{ $document['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Zobrazenie PDF -->
                    <div class="col-12 col-md-8">
                        <div class="pdf-viewer border rounded shadow-sm" style="height: 600px; background-color: #f8f9fa;">
                            <iframe id="pdfViewer" src="" style="width: 100%; height: 100%; border: none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll('.document-link');
            const pdfViewer = document.getElementById('pdfViewer');

            // Pridanie udalosti na všetky odkazy
            links.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault(); // Zastaví predvolené správanie odkazu
                    const file = this.getAttribute('data-file'); // Získa cestu k PDF súboru
                    pdfViewer.src = file; // Nastaví zdroj iframe na zvolený súbor
                });
            });
        });
    </script>

@endsection

