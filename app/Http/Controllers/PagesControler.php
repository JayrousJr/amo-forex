<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControler extends Controller
{
    function index()
    {
        return view("/site/index");
    }
}