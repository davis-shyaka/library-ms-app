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
        $books = Book::with('category', 'author')->get();
        // $books = Book::all();

        if ($books) {
            $books = Book::paginate(4);
        }

        return view('books.index', compact('books',));
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
    public function store(Request $request)
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

    // public function show(Request $request)
    // {
    //     $books = Book::where('title', 'like', '%' . $request->item . '%')
    //         ->orWhere('author', 'like', '%' . $request->item . '%')
    //         ->orWhere('category', 'like', '%' . $request->item . '%')
    //         ->paginate(2);
    //     // if ($books) {
    //     //     $books = Book::paginate(2);
    //     // }
    //     return view('books.index', compact('books'));
    // }

    public function search(Request $request)
    {
        $books = Book::where('title', 'like', '%' . $request->item . '%')
            ->orWhereHas('author', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->item . '%');
            })
            ->orWhereHas('category', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->item . '%');
            })
            ->paginate();

        return view('books.index', compact('books'));
    }

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
            'author_id' => 'required',
            'description' => 'required',
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
