<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index() {
        return view('registration');
    }


    public function save(Request $request) {
        if (Auth::check()) {
            return redirect()->route('user.private');
        }
        $validateField = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required',
        ]);

        if (User::where('email', $validateField['email'])->exists()) {
            redirect()->route('user.registration')->withErrors([
                'email'->'Такой пользователь уже существует'
            ]);
        }
        
        $user = User::create($validateField);
        if ($user) {
            Auth::login($user);
            return redirect()->route('user.private');
        }
        return redirect()->route('user.login')->withErrors([
            'formError' => 'Ошибка при сохранении пользователя'
        ]);
    }
}
