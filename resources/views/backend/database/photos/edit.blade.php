@extends('backend.Layouts.layout')
@section('title', 'Edit')

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text">ÚPRAVA FOTOGRAFIE</h1>
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
            <div class="col-md-7 px-4 py-4">
                <form action="{{ route('photos.update', $photo->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div>
                        <label for="">Fotografie</label>
                        <input name="photo_path" class="form-control mb-0" type="file">
                        <small class="mb-3">Minimálna veľkosť fotografie 200px200</small>
                    </div>

                    @if($photo->description_active)
                        <label class="mt-3" for="">Popis</label>
                        <input name="description" class="form-control mt-2" type="text"
                               value="{{ $photo->description}}">

                    @endif

                    @if( $photo->link_active)
                        <label class="mt-3" for="">Odkaz</label>
                        <input name="link" class="form-control mt-2" type="text" value="{{ $photo->link }}">

                    @endif

                    <button type="submit" class="form-control mt-3">Upraviť</button>
                </form>
            </div>
            <div class="col-md-5">
                <img src="{{ $photo->getPath() }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

@endsection

