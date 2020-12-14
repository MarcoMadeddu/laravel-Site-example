<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantPageController extends Controller
{
    function index(){
        return view('restaurant.index');
    }
}
