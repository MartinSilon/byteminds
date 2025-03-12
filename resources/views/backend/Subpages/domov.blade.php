@extends('backend.Layouts.layout')
@section('title', 'Domov')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Domov</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container" >
        <div class="row content mb-2 py-3">
            <label for="">Sekcia 1</label>
            <div class="col-4">
                <x-links.link name="Text" type="text" id="4"></x-links.link>
            </div>
            <div class="col-4">
                <x-links.link name="Text" type="text" id="5"></x-links.link>
            </div>
            <div class="col-4">
                <x-links.link name="Text" type="text" id="6"></x-links.link>
            </div>
        </div>

        <div class="row content mb-2 py-3">
            <label for="">Sekcia 2</label>
            <div class="col-4">
                <x-links.link name="Fotografia" type="photo" id="9"></x-links.link>
            </div>
            <div class="col-8">
                <x-links.link name="Text" type="text" id="7"></x-links.link>

                <x-links.link name="Statistika1" type="text" id="8"></x-links.link>
                <x-links.link name="Statistika1" type="text" id="9"></x-links.link>

                <small class="mt-2" for="">Samotné body odeľte symbolom /, max 4 body</small>
                <x-links.link name="Body" type="text" id="10"></x-links.link>
            </div>

        </div>

        <div class="row content mb-2 py-3">
            <label for="">Sekcia 3</label>
            <div class="col-10">
                <x-links.link name="Text" type="text" id="11"></x-links.link>
            </div>
            <div class="col-2">
                <x-links.link name="Text" type="text" id="16"></x-links.link>
            </div>

            <div class="col-3">
                <x-links.link name="Text" type="text" id="12"></x-links.link>
            </div>
            <div class="col-3">
                <x-links.link name="Text" type="text" id="13"></x-links.link>
            </div>
            <div class="col-3">
                <x-links.link name="Text" type="text" id="14"></x-links.link>
            </div>
            <div class="col-3">
                <x-links.link name="Text" type="text" id="15"></x-links.link>
            </div>
            <div class="col-12">
                <x-links.link name="Pozadie sekcie" type="photo" id="10"></x-links.link>
            </div>
        </div>
    </div>

@endsection

