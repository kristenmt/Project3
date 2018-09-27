<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

    //
    public function results() {
        return view('results');
    }

}