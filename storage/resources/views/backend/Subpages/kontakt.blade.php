@extends('backend.Layouts.layout')
@section('title', 'Kontakt')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Kontakt</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container py-5 " >
        <div class="row content mb-2 py-3">
            <label for="">Sekcia 1</label>
            <div class="col-12">
                <x-links.link name="Pozadie hlavičky" type="photo" id="12"></x-links.link>
                <x-links.link name="Pozadie hlavičky" type="text" id="27"></x-links.link>
            </div>
        </div>
        <div class="row content mb-2 py-3">

            <div class="col-12">
                    <x-links.link name="Text" type="text" id="17"></x-links.link>
                </div>

                <div class="row  mb-2 py-3">
                    <div class="col-12">
                        <x-links.link name="Text" type="text" id="18"></x-links.link>
                    </div>
                </div>
                <div class="row  mb-2 py-3">
                    <div class="col-12">
                        <x-links.link name="Text" type="text" id="19"></x-links.link>
                    </div>
                </div>
                <div class="row  mb-2 py-3">
                    <div class="col-12">
                        <x-links.link name="Text" type="text" id="20"></x-links.link>
                    </div>
            </div>
        </div>
    </div>

@endsection

