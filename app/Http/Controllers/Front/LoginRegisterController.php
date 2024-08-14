<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function index()
    {
        return view('front.home.login-register');
    }
}
