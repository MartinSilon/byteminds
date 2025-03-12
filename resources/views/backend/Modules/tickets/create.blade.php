@extends('backend.Layouts.layout')
@section('title', 'Nový ticket')

@section('style')
    <style>
        .content select{
            border: 1px solid #ced4da !important;
        }

    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Nový ticket</h1>
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
            <div class="col-12">
                <form action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data" class="row">
                    @csrf

                    <!-- Meno -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Názov ticketu</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                required>
                        </div>
                    </div>

                    <!-- URL -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="url" class="form-label">Cesta k problému (url)</label>
                            <input
                                type="text"
                                name="url"
                                id="url"
                                class="form-control"
                                value="{{ old('name') }}"
                                placeholder="http://byteminds.sk/admin/ticket">
                        </div>
                    </div>

                    <!-- Klient -->
                    <div class="col-md-4">

                        <div class="mb-3">
                            <label for="client_id" class="form-label">Doména</label>
                            <select class="form-control" name="client_id" id="client_id">
                                <option value="">Vyberte doménu</option>
                                @foreach($clients as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- Status -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="status_id" class="form-label">Status</label>
                            <select class="form-control" name="status_id" id="status_id">
                                <option value="">Vyberte status</option>
                                @foreach($statuses as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Employee -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="employee_id" class="form-label">Určené pre</label>
                            <select class="form-control" name="employee_id" id="employee_id">
                                <option value="">Vyberte zamestnanca</option>
                                @foreach($employees as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Popis -->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Popis</label>
                            <textarea
                                name="description"
                                id="description"
                                class="form-control"
                                rows="5">{{ old('description') }}</textarea>
                        </div>
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

                    <button type="submit" class="form-control mt-3">Vytvoriť</button>
                </form>
            </div>

        </div>
    </div>
@endsection
