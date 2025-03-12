<div class="row content py-4">
    <div class="col-2">
        <label>Vyhľadať</label>
        <input class="searchbar form-control border" name="search" id="searchbar" placeholder="Číslo ticketu">
    </div>
    <div class="col-2">
        <label>Doména</label>
        <select class="form-control border" name="domain" id="domain">
            <option value="">Vyberte doménu</option>
            @foreach($clients as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <label>Status</label>
        <select class="form-control border" name="status" id="status">
            <option value="">Vyberte status</option>
            @foreach($statuses->where('id', '!=', 2) as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-2">
        <label>Určené pre</label>
        <select class="form-control border" name="employee" id="employee">
            <option value="">Vyberte zamestnanca</option>
            @foreach($employees as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>
