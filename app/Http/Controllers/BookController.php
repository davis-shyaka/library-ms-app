<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books = Book::with('category')->get();
        $books = Book::all();

        if ($books) {
            $books = Book::paginate(4);
        }

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author_id' => 'required',
            'description' => 'required|string',
            'category_id' => 'required',
            'language' => 'required|string',
            'format' => 'required',
            'publisher' => 'required|string',
            'isbn' => 'required|string',
            'quantity' => 'required|integer'
        ]);

        Book::create([
            'title' => $request->input('title'),
            'author_id' => $request->input('author_id'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'language' => $request->input('language'),
            'format' => $request->input('format'),
            'publisher' => $request->input('publisher'),
            'isbn' => $request->input('isbn'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, Book $book)
    {
        $books = Book::where('title', 'like', '%' . $request->item . '%')->paginate();
        // if ($books) {
        //     $books = Book::paginate(2);
        // }
        return view('books.index', compact('books'));
    }

    // public function search($query)
    // {
    //     $book = Book::where('title', 'like', '%' . $query . '%')->get();
    //     dd($book);
    //     // return view('book.index', compact('book'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string',
            'author_id' => 'required|',
            'description' => 'required|longText',
            'category_id' => 'required',
            'language' => 'required',
            'format' => 'required',
            'publisher' => 'required|string',
            'isbn' => 'required|string',
        ]);

        $book->update([
            'title' => $request->input('title'),
            'author_id' => $request->input('author_id'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'language' => $request->input('language'),
            'format' => $request->input('format'),
            'publisher' => $request->input('publisher'),
            'isbn' => $request->input('isbn'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
