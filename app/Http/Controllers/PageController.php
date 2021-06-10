<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    // Contacts
    public function contacts() {
        return view('contacts');
    }
}
