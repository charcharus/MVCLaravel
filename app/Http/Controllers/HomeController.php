<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function home()
    {
    	return view('welcome1');
    }

    public function index()
    {
        return view('index');
    }
}
