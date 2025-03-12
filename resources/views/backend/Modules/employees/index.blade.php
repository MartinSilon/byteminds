@extends('backend.Layouts.layout')
@section('title', 'Zamestnanci')


@section('body')
    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-12 d-flex justify-content-between px-0">
                <h1 class="header-text text-uppercase">List zamestancov</h1>
                <a class="btn btn-primary" href="{{ route('employees.create') }}">Pridať zamestnanca</a>

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
                    <th>Meno</th>
                    <th>Pozícia</th>
                    <th>Akcie</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ route('employees.edit', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->position }}</td>
                        <td>
                            <form action="{{ route('employees.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tohto zamestnanca?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Odstrániť</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if(count($employees) == 0)
                    <tr>
                        <td class="text-start">
                            Zamestnanci sa nenašli
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection

