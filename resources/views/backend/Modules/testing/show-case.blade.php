@extends('backend.Layouts.layout')
@section('title', 'Test Case: '. $testCase->title)

@section('style')
    <style>

        .card{
            font-size: 14px;
        }
        form button{
            font-size: 16px !important;
        }


        h5 {
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        p, li, em {
            font-size: 1rem;
            line-height: 1.6;
        }

        ol {
            margin-left: 20px;
        }

        ul.list-group {
            padding-left: 0;
        }

        /* Test Runy */
        .list-group-item {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 15px;
        }

        /* Formulár */
        .form-group label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        textarea.form-control, select.form-control {
            font-size: 1rem;
            padding: 10px;
        }

        .list-group-item+.list-group-item {
             border-top-width: 1px !important;
        }




    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">{{ $testCase->title }}</h1>
                <div>
                    <a class="btn btn-primary" href="{{ route('testing.index') }}">Späť na plány</a>
                </div>
            </div>
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

        <div class="mt-3">
            <div class="row content py-4 px-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <!-- Popis Testu -->
                            <h5 class="font-weight-bold">Popis:</h5>
                            <p class="">{{ $testCase->description }}</p>
                        </div>
                        <div class="col-md-6">
                            <!-- Predpoklady -->
                            <h5 class="font-weight-bold">Pre podmienky:</h5>
                            <p>{{ $testCase->preconditions }}</p>
                        </div>


                        <div class="col-md-12 mb-4">
                            <!-- Kroky -->
                            <h5 class="font-weight-bold">Kroky:</h5>
                            <ol class="ml-4">
                                @php
                                    $steps = explode("\n", $testCase->steps);
                                    $stepCount = 1;
                                @endphp
                                @foreach($steps as $step)
                                    @if(trim($step) !== '') <!-- Skontroluje, či krok nie je prázdny -->
                                    <li>{{ $stepCount++ }}. {{ $step }}</li>
                                    @endif
                                @endforeach
                            </ol>
                        </div>




                        <div class="col-md-12  mb-4">
                            <!-- Očakávaný výsledok -->
                            <h5 class="font-weight-bold">Očakávaný výsledok:</h5>
                            <p>{{ $testCase->expected }}</p>
                        </div>

                        <div class="col-md-12  mb-4">
                            <!-- Test Runy -->
                            <h5 class="font-weight-bold">Test Runy:</h5>
                            <ul class="list-group">
                                @foreach($testCase->testRuns as $run)
                                    <li class="list-group-item py-1" style="background-color: {{ $run->status == 'pass' ? '#a7c957' : ($run->status == 'fail' ? '#f28482' : ($run->status == 'skipped' ? '#fbf8cc' : '#bde0fe')) }}">
                                        <strong class="">
                                            {{ $run->status }}
                                        </strong> – <span class="text-muted">{{ $run->executed_at }}</span><br>
                                        <em>{{ $run->notes }}</em>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-md-12  mb-4">
                            <!-- Formulár na pridať nový Test Run -->
                            <form action="{{ route('testing.store-run') }}" method="POST" class="mt-4">
                                @csrf
                                <input type="hidden" name="case_id" value="{{ $testCase->id }}">
                                <input type="hidden" name="employee_id" value="4">

                                <!-- Status testu -->
                                <div class="form-group">
                                    <label for="status">Status testu</label>
                                    <select class="form-control" name="status" id="status" style="border: 1px solid #e1e1e1 !important;">
                                        <option value="pass">Pass</option>
                                        <option value="fail">Fail</option>
                                        <option value="blocked">Blocked</option>
                                        <option value="skipped">Skipped</option>
                                    </select>
                                </div>

                                <!-- Poznámky -->
                                <div class="form-group">
                                    <label for="notes">Poznámky</label>
                                    <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
                                </div>

                                <!-- Tlačidlo pre pridanie Test Run -->
                                <button type="submit" class=" mt-4 btn btn-primary">Pridať Test Run</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
