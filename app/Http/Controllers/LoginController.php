<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(): View
    {
        return view('Login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'text-user' => [
                'required',
                'string',
                'min:3',
                'max:20',
                'regex:/^(?=.*[A-Z])(?=.*[0-9]).+$/'
            ],
            'text-password' => [
                'required',
                'string',
                'min:3',
                'max:25',
                'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*]).+$/'
            ],
        ], [
            'text-user.required' => 'O usuário é obrigatório.',
            'text-user.min' => 'O usuário deve ter no mínimo 3 caracteres.',
            'text-user.max' => 'O usuário deve ter no máximo 20 caracteres.',
            'text-user.regex' => 'O usuário deve conter pelo menos 1 letra maiúscula e 1 número.',

            'text-password.required' => 'A senha é obrigatório.',
            'text-password.min' => 'A senha deve ter no mínimo 3 caracteres.',
            'text-password.max' => 'A senha deve ter no máximo 25 caracteres.',
            'text-password.regex' => 'A senha deve conter pelo menos 1 número e 1 caracter especial.',
        ]);

        session()->put('user', $request->input('text-user'));
        return redirect()->to('/');
    }
}
