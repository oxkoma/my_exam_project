<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  
    public function login(Request $request) {
        if (Auth::check()) {
            return redirect()->route('user.private');
        }
        $formField = $request->only(['email', 'password']);

        if(Auth::attempt($formField)) {
            return redirect()->route('user.private');
        }
        return redirect()->route('user.login')->withErrors([
            'email' => 'Авторизация не удалась'
        ]);
    }
}
