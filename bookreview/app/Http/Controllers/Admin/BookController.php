<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $book=[
            [
                "id" => 1,
                "title" => "harry potter",
            ],
            [
                "id" => 2,
                "title" => "To Kill a Mockingbird",
            ]
        ];
        return view("admins.content.book.index",["book" => $book]);
    }
}
