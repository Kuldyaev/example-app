<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        
        if (Auth::user()->isAdmin) {
            dump(Auth::user()->isAdmin);
            return redirect()->route('admin.news.index');
        }

        return redirect()->route('home');
    }
}