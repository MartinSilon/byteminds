@extends('frontend.layouts.app')
@section('title', 'Dokumenty')
@section('content')
    @php
        $nazov= "Povolenia a dokumenty";
    @endphp

    <div class="container-fluid text-white py-5 position-relative container-green headline-container "
         style="background-image: url('{{ asset( $photo->find(13)->getPath()) }}') ;">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h2 class="fw-bold text-center " style="color: #f1b800">@php echo$nazov @endphp</h2>
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
                            @foreach ($documents as $document)
                                <li class="list-group-item">
                                    <a href="#" class="document-link text-decoration-none text-success " data-file="{{ asset('storage/' . $document->path) }}">
                                        {{ $document['name'] }}
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

