@extends('backend.Layouts.layout')
@section('title', 'Manuálne testovanie')

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
                <h1 class="header-text text-uppercase">Testovacie Plány</h1>
                <div>
                    <a class="btn btn-primary" href="{{ route('testing.create-plan') }}">Vytvoriť test</a>
                </div>
            </div>
        </div>

        @include('backend.Modules.testing.modules.filter-row')


        <div class="row mt-3 px-0">
            <div class="col-12 px-0">
                @foreach($testPlans as $plan)
                    <div class="content card mb-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plan->name }}</h5>
                            <p class="card-text">{{ $plan->description }}</p>
                            <h6>Test Cases:</h6>
                            <ul>
                                @forelse($plan->testCases as $case)
                                    <li class="d-flex w-100 justify-content-between mb-3 pb-1" style="border-bottom: 1px solid #ced4da">
                                        <div>
                                            <strong>{{ $case->title }}</strong> –
                                            <em>{{ $case->priority }}</em>
                                            <br>
                                            Modul: {{ $case->module ?? 'Nezadané' }}<br>
                                        </div>

                                        <a href="{{ route('testing.show-case', $case->id) }}" class="btn btn-sm btn-outline-primary mt-1 d-flex align-items-center">Zobraziť</a>
                                    </li>
                                @empty
                                    <li>Žiadne test casy</li>
                                @endforelse
                            </ul>
                            <a href="{{ route('testing.create-case', ['planId' => $plan->id]) }}" class="btn btn-sm btn-success mt-2">Pridať test case</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
