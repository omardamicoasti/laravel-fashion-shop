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
        // dd($dresses);
        $dresses = [
            "dresses" => $dresses;
        ];
        return view("dresses");
    }
}
