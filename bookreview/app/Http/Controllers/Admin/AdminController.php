<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $name = "Nguyen Dat";
        return view("admins.homepage",["name" => $name]);
    }
}
