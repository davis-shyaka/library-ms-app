<?php

namespace App\Http\Controllers;

use App\Models\BorrowedBook;
use App\Http\Requests\StoreBorrowedBookRequest;
use App\Http\Requests\UpdateBorrowedBookRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowedBooks = BorrowedBook::paginate(3);

        return view('borrowedBooks.index', compact('borrowedBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();

        return view('borrowedBooks.create', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBorrowedBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date'
        ]);

        $book = Book::find($request->book_id);
        if ($book->quantity > 0) {
            BorrowedBook::create([
                'user_id' => $request->input('user_id'),
                'book_id' => $request->input('book_id'),
                'borrow_date' => $request->input('borrow_date'),
                'return_date' => $request->input('return_date'),
            ]);

            $book->quantity -= 1;
            $book->update();

            return redirect()->route('borrowedBooks.index');
        } else {
            return back()->withErrors(['lent_out' => 'All copies of this book have already been lent.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BorrowedBook  $borrowedBook
     * @return \Illuminate\Http\Response
     */
    // public function show(BorrowedBook $borrowedBook)
    // {
    //     //
    // }

    // public function show(Request $request)
    // {
    //     $borrowedBooks = BorrowedBook::where('title', 'like', '%' . $request->item . '%')->paginate();
    //     // if ($books) {
    //     //     $books = Book::paginate(2);
    //     // }
    //     return view('borrowedBooks.index', compact('borrowedBooks'));
    // }

    public function search(Request $request)
    {
        $borrowedBooks = BorrowedBook::whereHas('book', function ($q) use ($request) {
            $q->where('title', 'like', '%' . $request->item . '%');
        })
            ->orWhereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->item . '%');
            })
            ->paginate();

        return view('borrowedBooks.index', compact('borrowedBooks'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BorrowedBook  $borrowedBook
     * @return \Illuminate\Http\Response
     */
    public function edit(BorrowedBook $borrowedBook)
    {
        $books = Book::all();
        $users = User::all();

        return view('borrowedBooks.edit', compact('borrowedBook', 'books', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowedBookRequest  $request
     * @param  \App\Models\BorrowedBook  $borrowedBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BorrowedBook $borrowedBook)
    {
        $request->validate([
            'user_id' => 'required|string',
            'book_id' => 'required|string',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date'
        ]);
        $borrowedBook->update([
            'user_id' => $request->input('user_id'),
            'book_id' => $request->input('book_id'),
            'borrow_date' => $request->input('borrow_date'),
            'return_date' => $request->input('return_date'),
        ]);

        return redirect()->route('borrowedBooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BorrowedBook  $borrowedBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(BorrowedBook $borrowedBook)
    {
        $borrowedBook->delete();

        return redirect()->route('borrowedBooks.index');
    }
}
