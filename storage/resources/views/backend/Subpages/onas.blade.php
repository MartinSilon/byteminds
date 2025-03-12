@extends('backend.Layouts.layout')
@section('title', 'O nás')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">O nás</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>

        <div class="row content mb-2 py-3">
            <div class="col-12">
                <x-links.link name="Pozadie hlavičky" type="photo" id="11"></x-links.link>
                <x-links.link name="Text1" type="text" id="21"></x-links.link>
                <x-links.link name="Text1" type="text" id="22"></x-links.link>

            </div>


        </div>


@endsection

