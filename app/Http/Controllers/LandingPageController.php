<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        $books = Book::latest()->paginate(6);

        return view('welcome', compact('books'));
    }
}
