<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $users =  DB::table('users')->paginate(15);
        return view("admin.content.user.index",["users" => $users]);
    }
}
