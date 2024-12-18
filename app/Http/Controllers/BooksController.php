<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Gate::authorize('viewAny');
        $books = Books::all();
        return response()->json($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
        ]);

        $book = Books::create($validated);
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $book)
    {
        //
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
        ]);

        $book ->update($validated);
        return response()->json($book, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return ["sikeres törlés"];
    }
}
