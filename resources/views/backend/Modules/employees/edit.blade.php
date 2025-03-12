@extends('backend.Layouts.layout')
@section('title', 'Zamestnanci')


@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Zamestnanec {{ $employee->name }}</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row content p-3">
            <div class="col-9">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Meno -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Meno</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            value="{{ old('name', $employee->name) }}"
                            required>
                    </div>

                    <!-- Pozícia -->
                    <div class="mb-3">
                        <label for="position" class="form-label">Pozícia</label>
                        <input
                            type="text"
                            name="position"
                            id="position"
                            class="form-control"
                            value="{{ old('position', $employee->position) }}"
                            required>
                    </div>

                    <!-- Popis -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Popis</label>
                        <textarea
                            name="description"
                            id="description"
                            class="form-control"
                            rows="5">{{ old('description', $employee->description) }}</textarea>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            value="{{ old('email', $employee->email) }}"
                            required>
                    </div>

                    <!-- Telefónne číslo -->
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Telefónne číslo</label>
                        <input
                            type="text"
                            name="phonenumber"
                            id="phonenumber"
                            class="form-control"
                            value="{{ old('phonenumber', $employee->phonenumber) }}">
                    </div>

                    <!-- Fotografia -->
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Fotografia</label>
                        <input
                            type="file"
                            name="photo_path"
                            id="photo_path"
                            class="form-control">
                    </div>

                    <button type="submit" class="form-control mt-3">Upraviť</button>
                </form>
            </div>
            <div class="col-3">
                <img src="{{ asset('storage/' . $employee->photo_path) }}" alt="Fotografia zamestnanca" width="100%">
            </div>
        </div>
    </div>

@endsection

