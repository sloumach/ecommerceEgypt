<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        return view('welcome');
    }
    public function products(){
        return view('showproducts');
    }

    public function contactus(){
        return view('contactus');
    }
    public function aboutus(){
        return view('aboutus');
    }
}
