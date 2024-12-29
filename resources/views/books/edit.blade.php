<x-layout>
    <h1>Könyv szerkesztése</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{route('books.update', $books->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Cím:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}"></input>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Szerző:</label>
            <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}"></input>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Kiadás éve:</label>
            <input type="number" class="form-control" id="year" name="year" value="{{$book->year}}"></input>
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Kiadó:</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{$book->publisher}}"></input>
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Nyelv:</label>
            <input type="text" class="form-control" id="language" name="language" value="{{$book->language}}"></input>
        </div>

        <button type="submit" class="btn btn-primary">Szerkesztés</button>
    </form>
</x-layout>
