<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenová ponuka</title>
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/DejaVuSans.ttf') }}") format('truetype');
        }
        body { font-family: 'DejaVu Sans', sans-serif; }
        .container { padding: 20px; border: 1px solid #ddd; }
        .title { font-size: 20px; font-weight: bold; margin-bottom: 10px; }
        .info { font-size: 16px; }
        .table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
    </style>
</head>
<body>

@php
    $total = array_sum(array_map('floatval', $ceny));
@endphp

<div class="container">
    <div class="title">Cenová ponuka</div>
    <p class="info"><strong>Meno firmy:</strong> {{ $name }}</p>
    <p class="info">{{ $description }}</p>
    <table class="table">
        <thead>
        <tr>
            <th>Cenový prvok</th>
            <th>Dodatočný text</th>
            <th>Cena (€)</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cenovePrvky as $index => $prvok)
            <tr>
                <td>{{ $prvok }}</td>
                <td>{{ $dodatecneTexty[$index] ?? '' }}</td>
                <td>{{ number_format($ceny[$index] ?? 0, 2, ',', ' ') }} €</td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <p><strong>Celková suma:</strong> {{ number_format($total, 2, ',', ' ') }} €</p>

</div>
</body>
</html>
