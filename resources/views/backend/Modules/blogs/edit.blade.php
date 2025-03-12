@extends('backend.Layouts.layout')
@section('title', 'Článok | '. $blog->title )

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Článok: {{ $blog->title }}</h1>
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

    <div class="container">
        <div class="row content p-3">
            <div class="col-12">
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row align-items-center mb-5">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="miniature_path" class="form-label">Fotografia v miniatúre</label>
                                <input
                                    type="file"
                                    name="miniature_path"
                                    id="miniature_path"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img height="100px" src="{{ asset($blog->getMiniature()) }}" alt="">
                        </div>
                    </div>
                    {{--Hlavička--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Názov článku</label>
                                <input
                                    type="text"
                                    name="title"
                                    id="name"
                                    class="form-control"
                                    value="{{ old('title', $blog->title) }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="header_path" class="form-label">Fotografia v hlavičke</label>
                                <input
                                    type="file"
                                    name="header_path"
                                    id="header_path"
                                    class="form-control">
                            </div>
                            <img height="100px" src="{{ asset($blog->getHeaderPath()) }}" alt="">

                        </div>
                    </div>


                    {{--Prvá sekcia článku--}}
                    <div class="row mt-5">
                        <div class="col-md-6 mb-3">
                            <div class="">
                                <label for="path1" class="form-label">Prvá fotografia v článku</label>
                                <input
                                    type="file"
                                    name="path1"
                                    id="path1"
                                    class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="path1_description" class="form-label">Popis fotografie</label>
                                <input
                                    type="text"
                                    name="path1_description"
                                    id="name"
                                    class="form-control"
                                    value="{{ old('path1_description', $blog->path1_description) }}">
                            </div>
                            <img height="100px" src="{{ asset($blog->getPath1()) }}" alt="">

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="text1" class="form-label">Prvá časť článku</label>
                                <textarea
                                    type="text"
                                    name="text1"
                                    id="text1"
                                    rows="10"
                                    class="form-control"
                                    required>{{ old('text1',$blog->text1) }}</textarea>
                            </div>
                        </div>
                    </div>


                    {{--Druhá sekcia článku--}}
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="text2" class="form-label">Druhá časť článku</label>
                                <textarea
                                    type="text"
                                    name="text2"
                                    id="text2"
                                    rows="10"
                                    class="form-control">{{ old('text2', $blog->text2) }}</textarea>
                            </div>
                        </div>
                    </div>

                    {{--Druhý obrázok článku--}}
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="">
                                <label for="path2" class="form-label">Druhá fotografia v článku</label>
                                <input
                                    type="file"
                                    name="path2"
                                    id="path2"
                                    class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="path2_description" class="form-label">Popis fotografie</label>
                                <input
                                    type="text"
                                    name="path2_description"
                                    id="name"
                                    class="form-control"
                                    value="{{ old('path2_description', $blog->path2_description) }}">
                            </div>
                            <img height="100px" src="{{ asset($blog->getPath2()) }}" alt="">
                        </div>
                    </div>

                    {{--Tretia sekcia článku--}}
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="text3" class="form-label">Tretia časť článku</label>
                                <textarea
                                    type="text"
                                    name="text3"
                                    id="text3"
                                    rows="10"
                                    class="form-control">{{ old('text3', $blog->text3) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="form-control mt-3">Upraviť</button>
                </form>
            </div>

        </div>
    </div>
@endsection
