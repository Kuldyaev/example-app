<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function loginVk() {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function responseVK(UserRepository $userRepository) {
        $user = Socialite::driver('vkontakte')->user();

        dd($user);

        $userInSysem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSysem);
        return redirect()->route('home');
    }

    public function loginGitHub() {
        return Socialite::driver('github')->redirect();
    }

    public function responseGitHub(UserRepository $userRepository) {
        $user = Socialite::driver('github')->user();
        
        $userInSysem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSysem);
        return redirect()->route('home');
    }
}