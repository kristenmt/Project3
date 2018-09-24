<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserhomeController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}

    //
    public function user() {
        return view('userhome');
    }

}