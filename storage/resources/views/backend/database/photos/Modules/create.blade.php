
<div class="col-12 content px-4 py-4 d-flex">
    <form class="w-75" action="{{ route('photos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Fotografia</label>
        <input name="photo_path" class="form-control mt-2 w-75" type="file">


        <label for="">Popis</label>
        <div class="d-flex gap-2">
            <input name="description" class="form-control mt-2 w-75" type="text">
            <label class="d-flex gap-2">
                <input name="description_active" type="checkbox" value="1"> Aktivovať
            </label>

        </div>
        <label for="">Odkaz</label>
        <div class="d-flex gap-2">
            <input name="link" class="form-control mt-2 w-75" type="text">
            <label class="d-flex gap-2">
                <input name="link_active" type="checkbox" value="1"> Aktivovať
            </label>
        </div>

{{--        <label for="">Minimálne rozmery</label>--}}
{{--        <div class="d-flex gap-2">--}}
{{--            <input name="size" class="form-control mt-2 w-75" type="text" placeholder="<nr>x<nr>">--}}
{{--        </div>--}}

        <button type="submit" class="form-control mt-3">Upraviť</button>

    </form>
</div>


