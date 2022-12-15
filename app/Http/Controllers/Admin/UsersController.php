<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::get()->except(Auth::user()->id);
     
       
        return view('admin.users')->with('users', $users);
    }
    
    public function editStatus(Request $request, User $user)
    {
        
        //dump($user->isAdmin);
        $user->isAdmin = !($user->isAdmin);
        $user->save();
        
        return redirect()->route('admin.users')->with('success', 'Статус пользователя успешно изменен!');
    }
}
