<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::all();
        return view('buku.index', compact('books'));
    }

    public function create(): View
    {
        return view('buku.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'author' => 'required|max:50',
            'judul' => 'required|max:50',
            'deskripsi' => 'required|max:255',
            'cover' => 'nullable|image|max:2048',
            'status' => 'required|in:publish,notpublish',
            'tanggal_upload' => 'nullable|date',
        ]);

        $book = new Book();
        $book->author = $validatedData['author'];
        $book->judul = $validatedData['judul'];
        $book->deskripsi = $validatedData['deskripsi'];
        $book->status = $validatedData['status'];
        $book->tanggal_upload = $validatedData['tanggal_upload'];

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->storeAs('public/covers', $cover->hashName());
            $book->cover = "covers/" . $cover->hashName();
        }

        $book->save();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dibuat.');
    }

    public function show(string $id): View
    {
        $book = Book::findOrFail($id);
        return view('buku.show', compact('book'));
    }

    public function edit(string $id): View
    {
        $book = Book::findOrFail($id);
        return view('buku.edit', compact('book'));
    }

    public function update(Request $request, Book $book): RedirectResponse
    {
        $validatedData = $request->validate([
            'author' => 'required|max:50',
            'judul' => 'required|max:50',
            'deskripsi' => 'required|max:255',
            'cover' => 'nullable|image|max:2048',
            'status' => 'required|in:publish,notpublish',
            'tanggal_upload' => 'nullable|date',
        ]);

        $book->author = $validatedData['author'];
        $book->judul = $validatedData['judul'];
        $book->deskripsi = $validatedData['deskripsi'];
        $book->status = $validatedData['status'];
        $book->tanggal_upload = $validatedData['tanggal_upload'];

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->storeAs('public/covers', $cover->hashName());
            $book->cover = "covers/" . $cover->hashName();
        }

        $book->save();

        return redirect()->route('books.index')->with('success', 'Buku berhasil diupdate.');
    }

    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $books = Book::where('judul', 'like', "%$search%")
            ->orWhere('author', 'like', "%$search%")
            ->paginate(10);

        return view('welcome', compact('books'));
    }
}
