<x-layout>
    <h1>Könyvek</h1>
    <ul>
        @foreach($books as $book)
            <li><a href="{{route('books.show', $book->id)}}">{{$book->title}} {{$book->author}}</a></li>
        @endforeach
    </ul>

    <a class="btn btn-primary" href="{{route('books.create')}}">Új könyv</a>
</x-layout>
