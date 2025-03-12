@extends('backend.Layouts.layout')

@section('title', 'Upraviť dokument')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Upraviť dokument</h1>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row content mb-2 py-3">
            <label for="">Úprava dokumentu</label>
            <div class="col-12">
                <form action="{{ route('documents.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Názov dokumentu</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $document->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="document" class="form-label">Nahrať nový súbor (nepovinné)</label>
                        <input type="file" class="form-control" id="document" name="document" accept=".pdf">
                    </div>

                    <button type="submit" class="btn btn-success">Uložiť zmeny</button>
                    <a href="{{ route('documents.index') }}" class="btn btn-secondary">Späť</a>
                </form>
            </div>

            <!-- PDF Viewer -->
            <div class="col-12 col-md-8 mt-4">
                <div class="pdf-viewer border rounded shadow-sm" style="height: 600px; background-color: #f8f9fa;">
                    <iframe id="pdfViewer" src="" style="width: 100%; height: 100%; border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pdfViewer = document.getElementById('pdfViewer');

            // Načítanie aktuálne upravovaného dokumentu do iframe
            const file = "{{ asset('storage/' . $document->path) }}";
            if (file) {
                pdfViewer.src = file;
            }
        });
    </script>
@endsection
