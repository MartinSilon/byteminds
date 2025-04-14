@extends('backend.Layouts.layout')
@section('title', 'Nový Testovací Plán')

@section('style')
    <style>
        .container select.border, .container input, .container textarea{
            border: 1px solid #ced4da !important;
            font-size: 14px;
        }
        label{
            font-size: 14px;
        }
        .card{
            font-size: 14px;
        }
        form button{
            font-size: 16px !important;
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">Vytvoriť Testovací Plán</h1>
                <div>
                    <a class="btn btn-primary" href="{{ route('testing.index') }}">Späť na plány</a>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="row content py-4 px-2">
                <div class="col-12">
                    <form action="{{ route('testing.store-plan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Názov plánu</label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Názov test plánu">
                        </div>

                        <div class="form-group mt-3">
                            <label for="description">Popis</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Popis plánu"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Vytvoriť Testovací Plán</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
