@extends('backend.Layouts.layout')

@section('title', 'Správa dokumentov')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Správa dokumentov</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" id="alert">
                    <p class="p-0 m-0">{{ session('success') }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container pb-5">

        <div class="row content py-2">
            <div class="col-6 ">
                <x-links.link name="Pozadie hlavičky" type="photo" id="13"></x-links.link>
            </div>
        </div>
        <!-- Sekcia 1: Formulár na nahrávanie dokumentov -->
        <div class="row content mb-2 py-3">
            <label for="">Nahrávanie dokumentov</label>

            <div class="col-6">
                <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Názov dokumentu</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="document" class="form-label">Nahrajte nový dokument (iba PDF)</label>
                        <input type="file" class="form-control" id="document" name="document" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-success">Nahrať</button>
                </form>
            </div>
        </div>

        <!-- Sekcia 2: Zoznam dokumentov -->
        <div class="row content mb-2 py-3">
            <label for="">Zoznam dokumentov</label>

            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Názov súboru</th>
                        <th>Akcie</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($documents->count() > 0)
                        @foreach ($documents as $document)
                            <tr>
                                <td>
                                    <a href="{{ route('documents.edit', $document->id) }}" class="document-link">
                                        {{ $document->name }}
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Naozaj chcete odstrániť tento dokument?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2" class="text-center">Žiadne dokumenty neboli nájdené.</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
