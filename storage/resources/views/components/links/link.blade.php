<a class="box-link py-2 px-4 d-flex align-items-center gap-5 mb-3"
    @if($type == 'text')
        href="{{ route('texts.edit', $id) }}"
    @else
       href="{{ route('photos.edit', $id) }}"
    @endif
    >
    {{$id}}
    @if($type == 'text')<div>
        <p>- {{ \Illuminate\Support\Str::limit($text->find($id)->text1, 30) }}</p>
        <p>- {{ \Illuminate\Support\Str::limit($text->find($id)->text2, 30) }}</p>
        <p>- {{ \Illuminate\Support\Str::limit($text->find($id)->text3, 30) }}</p>

    </div>
    @else
        <img src="{{ asset( $photo->find($id)->getPath()) }}" alt="">
        <p>{{ $name }}</p>
    @endif
</a>
