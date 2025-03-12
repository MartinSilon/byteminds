@extends('backend.Layouts.layout')
@section('title', 'Edit')


@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text">ÚPRAVA TEXTU</h1>
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
            <div class="col-12 px-4 py-4">
                <form action="{{ route('texts.update', $text->id) }}" method="post">
                    @csrf
                    @method('put')
                    <x-form.text-input name="text1" label="Pole 1" value="{{ $text->text1 }}"
                                       rows="{{ $text->text1_rows }}"></x-form.text-input>

                    @if( $text->text2_active)
                        <x-form.text-input name="text2" label="Pole 2" value="{{ $text->text2 }}"
                                           rows="{{ $text->text2_rows }}"></x-form.text-input>
                    @endif

                    @if( $text->text3_active)
                        <x-form.text-input name="text3" label="Pole 3" value="{{ $text->text3 }}"
                                           rows="{{ $text->text3_rows }}"></x-form.text-input>
                    @endif

                    <button type="submit" class="form-control mt-3">Upraviť</button>
                </form>
            </div>
        </div>
    </div>

@endsection

