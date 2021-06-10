<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    //
    public function index()
    {
        $travels = Travel::paginate(5);

        return view('travels', compact('travels'));
    }
}
