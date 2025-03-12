@extends('frontend.layouts.app')
@section('title', 'Chcem byť klientom')
@section('content')
    <div class="siteBg">


        <div class="py-5">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success" id="alert">
                        <p class="p-0 m-0">{{ session('success') }}</p>
                    </div>
                @endif
            </div>
            <div class="container mt-5 p-4 border rounded shadow py-5">
                <h2 class=" mb-4">Nábor klientov</h2>
                <form action="{{ route('form.client.store') }}" method="POST">
                    @csrf
                    <!-- Formulár -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Meno a Priezvisko</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Zadajte vaše meno" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Zadajte váš email" required>
                    </div>
                    <div class="mb-3">
                        <label for="options" class="form-label">Možnosť</label>
                        <select class="form-control" id="options" name="options" required>
                            <option value="">Vyberte možnosť</option>
                            <option value="Možnosť 1">Možnosť 1</option>
                            <option value="Možnosť 2">Možnosť 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Detaily</label>
                        <textarea class="form-control" id="details" name="details" rows="4" placeholder="Napíšte detaily" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Odoslať</button>
                </form>
            </div>
        </div>




@endsection
