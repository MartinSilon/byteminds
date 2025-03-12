@extends('backend.Layouts.layout')
@section('title', 'Články')


@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">Články</h1>
                <a class="btn btn-primary" href="{{ route('blogs.create') }}">Vytvoriť článok</a>

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
        </div>
    </div>

    <div class="container">
        <div class="row content p-3">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Názov</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>

                @foreach($blogs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ route('blogs.edit', $item->id) }}">{{ $item->title }}</a></td>
                        <td>
                            <form action="{{ route('blogs.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tento článok?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if(count($blogs) == 0)
                    <tr>
                        <td class="text-start">
                            Články sa nenašli
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection

