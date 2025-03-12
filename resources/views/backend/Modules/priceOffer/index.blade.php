@extends('backend.Layouts.layout')
@section('title', 'Zamestnanci')


@section('body')
    <style>
        .content .border {
            box-shadow: none !important;
        }
    </style>

    <div class="container">
        <div class="row header-row mb-2">
            <div class="col-6 px-0">
                <h1 class="header-text text-uppercase">Nová cenová ponuka</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="alert">
                    <p class="p-0 m-0">{{ $errors->first() }}</p>
                </div>
            @endif
        </div>
    </div>
    <script>
        function addField() {
            let container = document.getElementById('fieldContainer');
            let div = document.createElement('div');
            div.classList.add('mb-3', 'p-3', 'rounded', 'border', 'custom-box');
            div.innerHTML = `
                <input type="text" class="form-control mb-2" name="cenovePrvky[]" placeholder="Názov cenového prvku" required>
                <input type="text" class="form-control mb-2" name="dodatecneTexty[]" placeholder="Popis" required>
                <input type="number" class="form-control mb-2" name="ceny[]" placeholder="Cena" step="0.01" required>
                <button type="button" class="btn btn-danger btn-sm" onclick="this.parentNode.remove()">Odstrániť</button>
            `;
            container.appendChild(div);
        }
    </script>
    <div class="container">
        <div class="row content p-3">
            <div class="col-12">
                <form action="{{ route('priceoffer.generate') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="name" class="form-label">Meno firmy</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label  for="description" class="form-label">Úvodný text</label>
                                <textarea rows="5" name="description" class="form-control">Ďakujeme za váš záujem o naše služby/produkty. Na základe vašich požiadaviek sme pre vás pripravili cenovú ponuku, ktorá zahŕňa všetky dôležité detaily, aby ste mali jasný prehľad o možnostiach a nákladoch.</textarea>
                            </div>
                        </div>
                        <div class="col-7">
                            <label for="name" class="form-label">Cenové prvky:</label>

                            <div id="fieldContainer">
                                <div class="mb-3 border p-3 rounded shadow-none" style="box-shadow: none !important;">
                                    <input type="text" class="form-control mb-2" name="cenovePrvky[]" placeholder="Názov cenového prvku" required>
                                    <input type="text" class="form-control mb-2" name="dodatecneTexty[]" placeholder="Dodatočný text" required>
                                    <input type="number" class="form-control mb-2" name="ceny[]" placeholder="Cena" step="0.01" required>
                                </div>
                            </div>
                            <button type="button" class="form-control mt-3 w-50" onclick="addField()">+ pridať cenový prvok</button>

                        </div>
                    </div>


                    <button type="submit" class="form-control mt-3">Generovať PDF</button>

                </form>
            </div>
        </div>
    </div>

@endsection


