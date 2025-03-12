@extends('backend.Layouts.layout')

@section('title', 'Články')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Články</h1>
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

        <div class="row content py-2 my-2">

            <div class="col-6 ">
                <x-links.link name="Pozadie hlavičky" type="photo" id="14"></x-links.link>
            </div>
            <div class="col-12">
                <x-links.link name="Text" type="text" id="36"></x-links.link>
            </div>
        </div>

    </div>

@endsection
