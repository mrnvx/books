<x-app-layout>
<div>
    <h1>Show</h1>
        
        <div>
            <h3>Book Name: </h3>{{ $book->name }}
            <h3>Book Author: </h3>{{ $book->author }}
            <h3>Book Release date: </h3>{{ $book->released_at }}
        </div>
        <br>
        <div>
            <a href="{{ route('book.edit', $book) }}">Edit</a>
            <br><br>
            <form action="{{ route('book.destroy', $book) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                        <a href="{{ route('book.index') }}">Back</a>
        </div>
</div>
</x-app-layout>