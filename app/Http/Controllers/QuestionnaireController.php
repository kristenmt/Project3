<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    //
    public function questionnaire() {
        return view('questionnaire');
    }
}

