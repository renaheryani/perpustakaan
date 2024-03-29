<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('book-list', ['books' => $books]);
    }
}
