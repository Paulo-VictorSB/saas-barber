<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(): View
    {
        return view('Home');
    }

    public function logout(): View
    {
        Session::forget('user');

        return view('login');
    }
}
