<div class="col-12 content px-4 py-4 mt-3">
    <table class="w-100">
        <thead>
        <th>ID</th>
        <th>Description</th>
        </thead>
        <tbody>
        @foreach($photos as $photo)
        <tr>
            <td><a href="{{route('photos.edit', $photo->id)}}">{{ $photo->id }}</a></td>
            <td><a href="{{route('photos.edit', $photo->id)}}">{{ $photo->description }}</a></td>
            <td></td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

