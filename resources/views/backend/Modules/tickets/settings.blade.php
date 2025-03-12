@extends('backend.Layouts.layout')
@section('title', 'Zamestnanci')
@section('style')
    <style>
        h5{
            font-size: 15px;
            letter-spacing: 0.5px;
            font-weight: 400;
            color: #4c5258;
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">Nastavenia Ticketov</h1>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row content p-3">
            <h5 class="text-uppercase ps-0">Statusy</h5>

            <form action="{{ route('ticket.status.store') }}" method="post" class="ps-0 mb-3 d-flex">
                @csrf
                <input type="text" name="name" class="form-control w-25">
                <input type="color" name="color" class="h-100 form-control w-25">
                <button class="form-control w-25">Uložiť</button>
            </form>

            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statuses as $item)
                    <tr>
                        <form method="Post" action="">
                            @csrf
                            @method('PUT')
                            <td>
                                <div style="min-height: 20px; width: 20px; background-color: {{ $item->color }}"></div>
                            </td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                        </form>
                        <td>
                            @if($item->id > 6 )
                            <form action="{{ route('ticket.status.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tohto zamestnanca?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        <div class="row content p-3 mt-5">
            <h5 class="text-uppercase ps-0">Klienti</h5>

            <form action="{{ route('ticket.client.store') }}" method="post" class="ps-0 mb-3 d-flex">
                @csrf
                <input type="text" name="name" class="form-control w-25">
                <button class="form-control w-25">Uložiť</button>
            </form>

            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>
                <tbody>
                @foreach($clients as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#carouselModal{{ $item->id }}">
                                {{ $item->name }}
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('ticket.client.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tohto zamestnanca?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                @foreach($clients as $item)
                    <div class="modal fade" id="carouselModal{{ $item->id }}" tabindex="-1" aria-labelledby="carouselModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="carouselModalLabel{{ $item->id }}">{{ $item->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="carousel{{ $item->id }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <form action="{{ route('ticket.client.update', $item->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                                                <button class="form-control mt-2">Uložiť</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

