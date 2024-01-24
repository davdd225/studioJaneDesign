<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentioinController extends Controller
{
    //
    public function index(){
        return view('mentions-legales');
    }
}
