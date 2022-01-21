<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();

        return view('dash', compact('book'), ['title' => 'Post']);
    }
    public function index2()
    {
        //
        return view('profile', ['title' => 'User']);
        // return 'lol';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Book::create($request->all());
        // return $request;

        $buku = new Book;
        $buku->judul = $request->judul;
        $buku->jumlah = $request->jumlah;
        $buku->penulis = $request->penulis;

        $buku->save();
        return redirect('/dasss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book = Book::all();

        return view('dash', compact('book'), ['title' => 'Post']);
        // return 'lol';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'), [
            'title' => 'Edit'
        ]);
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
        // $request->validate([
        //     'judul' => 'max:255',
        //     'penulis' => 'max:255'
        // ]);

        Book::where('id', $book->id)->update([
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'penulis' => $request->penulis

        ]);


        // return $request;

        return redirect('/dasss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/dasss');
    }
}
