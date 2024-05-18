<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        return view('user.index');
    }
    function logout(){
        Auth::logout();
        return redirect()->route('frontend.home');
    }
}

