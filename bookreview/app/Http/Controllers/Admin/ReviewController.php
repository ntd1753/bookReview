<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    function index(){
        $review =  DB::table('reviews')->paginate(15);
        return view("admin.content.review.index",["reviews" => $review]);
    }
    public function add(){
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("admin.content.review.add", ["categories"=>$categories]);
    }
    public function store(Request $request){
        echo "<pre>";
         print_r($request->all());
         echo "</pre>";
        $input = $request->all();
        $review = new Review();
        $review["name"] = $input["name"];
        $review["description"] = $input["description"];
        $review["content"] = $input["content"];
        $review["preview_image"]=$input['preview_image'];
        $review["category_id"]=$input['category_id'];
        $review["user_id"]= '5'; //chưa có user
        $review->save();
        return redirect()->route("admin.review.index");
    }
    public function edit($review_id){
        $item = Review::find($review_id);
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("admin.content.review.edit", ["categories"=>$categories, "item"=>$item]);
    }
    public function update(Request $request, $review_id){
        $item = Review::find($review_id);

        if($item){
            $input = $request->all();
            $item["name"] = $input["name"];
            $item["description"] = $input["description"];
            $item["content"] = $input["content"];
            $item["preview_image"]=$input['preview_image'];
            $item["category_id"]=$input['category_id'];
            $item->save();
        }

        return redirect()->route("admin.review.index");
    }
    public function destroy($id){
        $item = Review::find($id);
        if($item){
                $item->delete();
        }
        return redirect()->route("admin.review.index");
    }
}
