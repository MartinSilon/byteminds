@extends('frontend.layouts.app')
@section('title', 'Chcem byť obchodníkom')
@section('content')
    <div class="siteBg">
        @php
            $nazov= "Chcem byť klinetom";
        @endphp
<div class="py-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success" id="alert">
                    <p class="p-0 m-0">{{ session('success') }}</p>
                </div>
            @endif
        </div>

        <div class="container mt-5 p-4 border rounded shadow py-5">
                <h2 class=" mb-4">Formulár na nábor obchodníkov</h2>
            <form action="{{ route('form.trader.store') }}" method="POST" enctype="multipart/form-data">   @csrf
                    <!-- Meno a Priezvisko -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Meno a Priezvisko</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Zadajte vaše meno a priezvisko" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Emailová adresa</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Zadajte váš email" required>
                    </div>

                    <!-- Telefónne číslo -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefónne číslo</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Zadajte váš telefón" required>
                    </div>

                    <!-- Oblasť záujmu -->
                    <div class="mb-3">
                        <label for="interest" class="form-label">Oblasť záujmu</label>
                        <select class="form-select" id="interest" name="interest" required>
                            <option value="">Vyberte oblasť</option>
                            <option value="sales">Predaj</option>
                            <option value="customer_service">Starostlivosť o zákazníka</option>
                            <option value="product_expertise">Odborník na produkty</option>
                        </select>
                    </div>

                    <!-- Predchádzajúce skúsenosti -->
                    <div class="mb-3">
                        <label for="experience" class="form-label">Popíšte vaše predchádzajúce skúsenosti</label>
                        <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="Napíšte o svojich skúsenostiach v obchodnej oblasti"></textarea>
                    </div>

                    <!-- Nahratie životopisu -->
                    <div class="mb-3">
                        <label for="resume" class="form-label">Nahrajte váš životopis (PDF)</label>
                        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf" required>
                    </div>

                    <!-- Doplňujúce informácie -->
                    <div class="mb-3">
                        <label for="additionalInfo" class="form-label">Doplňujúce informácie</label>
                        <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="3" placeholder="Napíšte akékoľvek doplňujúce informácie"></textarea>
                    </div>

                    <!-- Odoslanie formulára -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Odoslať</button>
                    </div>
                </form>
            </div>
</div>

@endsection

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
