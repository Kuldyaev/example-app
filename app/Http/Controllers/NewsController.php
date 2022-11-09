<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function addOne(){
        return view('addOne');
    }

    public function categories(){
        return view('categories');
    }
}