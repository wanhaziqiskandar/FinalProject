<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.index', [
            //'books' => Book::all(),
            'availableBooks' => Book::where('available', 'Yes')->paginate(30),
            'borrowedBooks' => Book::where('available', 'No')->paginate(30)
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'category' => $request->category,
            'available' => 'Yes'
        ]);

        return redirect(route('book.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', [
            'book' => $book,
            'loans' => Loan::where('book_id', '=', $book->id)->whereNull('returnDate')->paginate(25),
            'records' => Loan::where('book_id', '=', $book->id)->whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(25),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
