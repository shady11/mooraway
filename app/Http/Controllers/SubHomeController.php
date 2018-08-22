<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubHomeController extends Controller
{
    public function index()
    {
        return view('subhome');
    }
}
