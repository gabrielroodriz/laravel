<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books')->with('books', $books);
    }

    public function create(Request $request)
    {
        $book = new Book;
        $book->title = $request->book;

        $book->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->back();
    }

    public function updateView($id)
    {
        $book = Book::find($id);

        return view('updateView')->with('books', $book);
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);

        $book->title = $request->title;

        $book->update();

        return redirect('/books');
    }
}
