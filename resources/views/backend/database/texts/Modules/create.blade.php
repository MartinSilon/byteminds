
<div class="col-12 content px-4 py-4 d-flex">
    <form class="w-75" action="{{ route('texts.store') }}" method="post">
        @csrf
        <label for="">Pole 1 (Hlavné pole)</label>
        <div class="d-flex gap-2">
            <input name="text1" class="form-control mt-2 w-75" type="text">
            <input name="text1_rows" class="form-control mt-2 w-25" type="number" value="1" min="1" max="15">
        </div>

        <label for="">Pole 2</label>
        <div class="d-flex gap-2">
            <input name="text2" class="form-control mt-2 w-75" type="text">
            <input name="text2_rows" class="form-control mt-2 w-25" type="number" value="1" min="1" max="15">
            <label class="d-flex gap-2">
                <input name="text2_active" type="checkbox" value="1"> Aktivovať
            </label>

        </div>
        <label for="">Pole 3</label>
        <div class="d-flex gap-2">
            <input name="text3" class="form-control mt-2 w-75" type="text">
            <input name="text3_rows" class="form-control mt-2 w-25" type="number" value="1" min="1" max="15">
            <label class="d-flex gap-2">
                <input name="text3_active" type="checkbox" value="1"> Aktivovať
            </label>
        </div>

        <button type="submit" class="form-control mt-3">Upraviť</button>

    </form>
</div>


