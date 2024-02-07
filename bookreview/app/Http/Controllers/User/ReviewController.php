<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Review;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    function index(){
        //$review =  DB::table('reviews')->paginate(15);
        $review =  Review::where('user_id','=',Auth::user()->id)->paginate(15);
        return view("user.review.index",["reviews" => $review]);
    }
    public function add(){
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("user.review.add", ["categories"=>$categories]);
    }
    public function store(Request $request){
        $input = $request->all();
        $review = new Review();
        $review["name"] = $input["name"];
        $review["slug"]=$input["slug"];
        $review["description"] = $input["description"];
        $review["content"] = $input["content"];
        $review["preview_image"]=$input["image"];
        $review["category_id"]=1;
        $review["user_id"]=Auth::user()->id; //chưa có user
        $review["num_view"]=0;
        $review->save();
        $seo = new SEO();
        $seo["review_id"] = $review->id;
        $seo["seo_keyword"] = $input["seo_keywords"];
        $seo["seo_description"]=$input["seo_description"];
        $seo["seo_title"] = $input["seo_title"];
        $seo -> save();
        return redirect()->route("user.index");
    }
    public function edit($review_id){
        $item =Review::find($review_id);
        $seo = Seo::Where('review_id', "=", $review_id)->get();
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        $seo_0 = $seo[0];

        return view("user.review.edit", ["categories"=>$categories, "item"=>$item,"seo" => $seo_0]);

    }

    public function update(Request $request, $review_id){
        $item =Review::find($review_id);
        $seo = SEO::where('review_id','=',$review_id);


        if($item && $seo){
            $input = $request->all();
            $item["name"] = $input["name"];
            $item["slug"]=$input["slug"];
            $item["description"] = $input["description"];
            $item["content"] = $input["content"];
            $item["preview_image"]=$input["image"];
            $item->save();
            $seo = new SEO();
            $seo["review_id"] = $item->id;
            $seo["seo_keyword"] = $input["seo_keywords"];
            $seo["seo_description"]=$input["seo_description"];
            $seo["seo_title"] = $input["seo_title"];
            $seo->save();
        }
        return redirect()->route("user.index");

    }

    public function destroy($id){
        $item = Review::find($id);
        if($item){
                $item->delete();
        }
        return redirect()->route("user.index");
    }
}
