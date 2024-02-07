<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $review= Review::orderBy('id', 'desc')->get();
        $trend= Review::orderBy("num_view",'desc')->take(5)->get();
//        echo "<pre>";
//        print_r($review[0]->owner);
//        echo "</pre>";
//        exit;
        return view("frontend.home",["reviews" => $review,"trend" => $trend]);

    }
    function detail($id){
        $post=Review::find($id);
        return view("frontend.detail",['post' => $post]);
    }
}
