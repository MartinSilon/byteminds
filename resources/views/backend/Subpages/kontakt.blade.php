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

    <div class="container pb-5 " >
        <div class="row content py-2">
            <div class="col-6 ">
                <x-links.link name="Pozadie hlavičky" type="photo" id="14"></x-links.link>
            </div>
        </div>
        <div class="row content mb-2 py-3">
            <label for="">Sekcia 1</label>
            <div class="row  mb-2 py-3">
            <div class="col-12">
                <x-links.link name="Text" type="text" id="32"></x-links.link>
            </div>
            </div>

            <div class="col-12">
                <x-links.link name="Text" type="text" id="17"></x-links.link>
            </div>


            <div class="col-12">
                <x-links.link name="Text" type="text" id="28"></x-links.link>
            </div>

            <div class="col-12">
                <x-links.link name="Text" type="text" id="29"></x-links.link>
            </div>

            <div class="col-12">
                <x-links.link name="Text" type="text" id="30"></x-links.link>
            </div>
                <div class="col-12">
                    <x-links.link name="Text" type="text" id="31"></x-links.link>
                </div>
            <div class="col-12">
                <x-links.link name="Text" type="text" id="34"></x-links.link>
            </div>

        </div>
    </div>

@endsection

