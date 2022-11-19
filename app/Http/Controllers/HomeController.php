<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('layouts.frontpage.landingpage');
    }

    function order(){
        return view('order');
    }
}

