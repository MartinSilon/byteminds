<div class="row content py-4">
    <form class="row" method="GET" action="{{ route('testing.index') }}">
        <div class="col-4">
            <label>Vyhľadať</label>
            <input class="searchbar form-control border" name="search" id="searchbar" placeholder="Názov testu" value="{{ request('search') }}">
        </div>

        <div class="col-4">
            <label>Určené pre</label>
            <select class="form-control border" name="employee" id="employee">
                <option value="">Vyberte zamestnanca</option>
                @foreach($employees as $item)
                    <option value="{{ $item->id }}" {{ request('employee') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Filtrovať</button>
        </div>
    </form>
</div>
