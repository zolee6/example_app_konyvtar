<x-layout>
    <h1>Könyv címe:{{$book->'title'}}</h1>
    <p>Szerző:{{$book->author}}</p>
    <p>Kiadás éve:{{$book->year}}</p>
    <p>Kiadó:{{$book->publisher}}</p>
    <p>Nyelv:{{$book->language}}</p>

    <a class="btn btn-warning" href="{{route('books.edit', $book->id)}}">Sterkesztés</a>

    <form method="POST" action="{{route('books.destroy', $book->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger my-2" href="">Törlés</button>
    </form>
</x-layout>
