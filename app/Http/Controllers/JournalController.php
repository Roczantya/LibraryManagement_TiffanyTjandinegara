<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal; 

use Illuminate\View\View;

class JournalController extends Controller
{
    public function index() : View
    {
        //get all products
        $Journals = Journal::latest()->paginate(10);

        //render view with products
        return view('Journal.index', compact('Journals'));
    }
}

