<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $category = [
            [
                "id" => 1,
               "name" => "quan ao"
            ],
            [
                "id" => 2,
                "name" => "sach vo"
            ]
        ];
        return view("admins.content.category.index",["category" => $category]);
    }
}
