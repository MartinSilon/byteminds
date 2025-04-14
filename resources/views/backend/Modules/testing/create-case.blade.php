@extends('backend.Layouts.layout')
@section('title', 'Nová Test Case')

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
                <h1 class="header-text text-uppercase">Vytvoriť Test Case</h1>
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

        <div class=" mt-3">
            <div class="row content py-4 px-2">
                <div class="col-12">
                    <form action="{{ route('testing.store-case') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <input type="hidden" name="employee_id" value="4"> <!-- Môžete pridať dynamické ID zamestnanca tu -->

                        <!-- Názov testu -->
                        <div class="form-group">
                            <label for="title">Názov testu</label>
                            <input type="text" class="form-control" id="title" name="title" required placeholder="Názov test case" value="{{ old('title') }}">
                        </div>

                        <!-- Popis testu -->
                        <div class="form-group mt-3">
                            <label for="description">Popis</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Popis testu">{{ old('description') }}</textarea>
                        </div>

                        <!-- Predpodmienky -->
                        <div class="form-group mt-3">
                            <label for="preconditions">Pred podmienky</label>
                            <textarea class="form-control" id="preconditions" name="preconditions" rows="3" placeholder="Podmienky pred začatím testu (napr. nastavenie prostredia, prihlasovanie a pod.)">{{ old('preconditions') }}</textarea>
                        </div>

                        <!-- Návod na vykonanie testu -->
                        <div class="form-group mt-3">
                            <label for="steps">Návod</label>
                            <textarea class="form-control" id="steps" name="steps" rows="3" placeholder="Podrobné kroky vykonania testu">{{ old('steps') }}</textarea>
                        </div>

                        <!-- Očakávaný výsledok -->
                        <div class="form-group mt-3">
                            <label for="expected">Očakávaný výsledok</label>
                            <textarea class="form-control" id="expected" name="expected" rows="3" placeholder="Očakávaný výsledok testu">{{ old('expected') }}</textarea>
                        </div>

                        <!-- Priorita -->
                        <div class="form-group mt-3">
                            <label for="priority">Priorita</label>
                            <select class="form-control" name="priority" id="priority" style="border: 1px solid #e1e1e1 !important;">
                                <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Nízká</option>
                                <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Stredná</option>
                                <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>Vysoká</option>
                            </select>
                        </div>

                        <!-- Modul -->
                        <div class="form-group mt-3">
                            <label for="module">Modul</label>
                            <input type="text" class="form-control" id="module" name="module" value="{{ old('module') }}" placeholder="Názov modulu">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Vytvoriť Test Case</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
