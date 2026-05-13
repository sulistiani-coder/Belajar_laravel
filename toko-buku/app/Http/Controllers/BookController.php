<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Lihat semua buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Form tambah buku
    public function create()
    {
        return view('books.create');
    }

    // Simpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'tahun_terbit' => 'required|digits:4|numeric|min:1945',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Lihat detail buku
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    // Form edit buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    // Update data buku
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'tahun_terbit' => 'required|digits:4|numeric|min:1945',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil diupdate!');
    }

    // Hapus buku
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}