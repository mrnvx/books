<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()->orderBy('created_at', 'desc')->paginate();
        // dd($books);
        return view ('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>['required', 'string'],
            'released_at' =>['required', 'string'],
            'author' =>['required', 'string']
        ]);
        $book = Book::create($data);
        return to_route('book.show', $book);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view ('book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view ('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $data = $request->validate([
            'name' =>['required', 'string'],
            'released_at' =>['required', 'string'],
            'author' =>['required', 'string']
        ]);
        
        $book->update($data);

        return to_route('book.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        
        $book->delete();

        return to_route('book.index', $book);
    }
}
