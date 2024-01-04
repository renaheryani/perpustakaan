<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

    public function add()
    {
        return view('book-add');
    }

    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'book_code' => 'required|unique:categories|max:100',
        //     'title' => 'required|unique:categories|max:100',
        //     'cover' => 'required|unique:categories|max:100'
        // ]);
        $book = Book::create($request->all());
        return redirect('books')->with('status', 'Buku berhasil ditambahkan!');
    }

}
