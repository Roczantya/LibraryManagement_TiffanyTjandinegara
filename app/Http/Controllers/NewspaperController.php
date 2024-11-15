<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newspaper; 

use Illuminate\View\View;

class NewspaperController extends Controller
{
    // show data

    public function index() : View
    {
        //get all products
        $Books = Book::latest()->paginate(10);

        //render view with products
        return view('Book.index', compact('Books'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Newspaper $newspaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newspaper $newspaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newspaper $newspaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newspaper $newspaper)
    {
        //
    }
}
