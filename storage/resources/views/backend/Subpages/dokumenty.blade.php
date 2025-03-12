@extends('backend.Layouts.layout')
@section('title', 'Dokumenty')


@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Dokumenty</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row content">
            <div class="col-12 py-5">
                <x-links.link name="Text1" type="text" id="3"></x-links.link>
                <x-links.link name="Text1" type="photo" id="4"></x-links.link>

            </div>
        </div>
    </div>

@endsection

