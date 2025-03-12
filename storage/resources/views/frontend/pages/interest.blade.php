@extends('frontend.layouts.app')
@section('title', 'Záujem o spoluprácu')

@section('content')
    <div class="siteBg">
        <div class="container-fluid min-vh-100 d-flex p-0">
            <!-- Prvý blok -->
            <a href="{{ route('home') }}" class="interest-bg flex-fill d-flex justify-content-center align-items-center text-decoration-none border-end">
                <h3 class="text-center m-0">Chcem byť klientom</h3>
            </a>

            <!-- Druhý blok -->
            <a href="{{ route('home') }}" class="interest-bg flex-fill d-flex justify-content-center align-items-center text-decoration-none">
                <h3 class="text-center m-0">Chcem byť obchodníkom</h3>
            </a>
        </div>

@endsection
