<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class MainController extends Controller
{
    //
    public function index() {
         return view("home");
    }

    public function dresses()
    {
        $dresses = Dress::all();
                
        return view("dresses", compact("dresses"));
    }

    public function informations()
    {
        return view("informations");
    }
}
