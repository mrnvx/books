<x-app-layout>
<div>
    <h1>Create new book</h1>
    <form action="{{ route ('book.store') }}" method="post">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Enter book name" >
    </div>
    <br>
    <div>
        <input type="text" name="author" placeholder="Enter book author">
    </div>
    <br>
    <div>
        <label for="pencil">Release date: </label>
        <input type="date" id="pencil" name="released_at">
    </div>
    <br>
    <div>
        <a href="{{ route('book.index') }}">Back</a>
        <button type="submit">Submit</button>
    </div>
    </form>
</div>
</x-app-layout>
