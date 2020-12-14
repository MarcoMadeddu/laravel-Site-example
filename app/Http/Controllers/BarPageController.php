<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarPageController extends Controller
{
    function index(){
        return view('bar.index');
    }
}
