<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(): View
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
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

        $buku = new Buku();
        $buku->author = $validatedData['author'];
        $buku->judul = $validatedData['judul'];
        $buku->deskripsi = $validatedData['deskripsi'];
        $buku->status = $validatedData['status'];
        $buku->tanggal_upload = $validatedData['tanggal_upload'];

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->storeAs('public/covers', $cover->hashName());
            $buku->cover = "covers/".$cover->hashName();
        }

        $buku->save();

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dibuat.');
    }

    public function show(string $id): View
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit(string $id): View
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku): RedirectResponse
    {
        $validatedData = $request->validate([
            'author' => 'required|max:50',
            'judul' => 'required|max:50',
            'deskripsi' => 'required|max:255',
            'cover' => 'nullable|image|max:2048',
            'status' => 'required|in:publish,notpublish',
            'tanggal_upload' => 'nullable|date',
        ]);

        $buku->author = $validatedData['author'];
        $buku->judul = $validatedData['judul'];
        $buku->deskripsi = $validatedData['deskripsi'];
        $buku->status = $validatedData['status'];
        $buku->tanggal_upload = $validatedData['tanggal_upload'];

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->storeAs('public/covers', $cover->hashName());
            $buku->cover = "covers/".$cover->hashName();
        }

        $buku->save();

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diupdate.');
    }

    public function destroy(Buku $buku): RedirectResponse
    {
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $bukus = Buku::where('judul', 'like', "%$search%")
                      ->orWhere('author', 'like', "%$search%")
                      ->paginate(10);
    
        return view('welcome', compact('bukus'));
    }
    
}
