<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('StaticPages/home');
    }

    public function about(){
        return view('StaticPages/about');
    }
    public function index(){
        return view('restaurant/index');
    }
}
