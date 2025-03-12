<div class="col-12 content px-4 py-4 mt-3">
    <table class="w-100">
        <thead>
        <th>ID</th>
        <th>Name</th>
        </thead>
        <tbody>
        @foreach($texts as $text)
        <tr>
            <td>{{ $text->id }}</td>
            <td><a href="{{route('texts.edit', $text->id)}}">{{ $text->text1 }}</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

