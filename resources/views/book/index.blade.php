<x-app-layout>
    <div class="book-container">
        <h2>Start</h2>
        <a href="{{ route('book.create') }}" class="new-book-btn">
            New Book
        </a>
       <br>
       <h2>List</h2>
        <div class="books">
            @foreach ($books as $book)
                <div class="book">
                
                    <div class="book-body">
                        {{ $book->name}}
                        {{ $book->author}}
                        {{ $book->released_at}}
                    </div>
                    <div class="book-buttons">
                        <a href="{{ route('book.show', $book) }}" class="book-edit-button">View</a>
                        <a href="{{ route('book.edit', $book) }}" class="book-edit-button">Edit</a>
                        <form action="{{ route('book.destroy', $book) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</x-app-layout>
