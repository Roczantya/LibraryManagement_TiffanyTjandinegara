<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $userLevel = Auth::user()->level;
            switch($userLevel){
                case "admin":
                    return view("admin.dashboard");
                case "librarian":
                    return view("librarian.dashboard");
            }
        }
        return view("welcome");
    }
}

