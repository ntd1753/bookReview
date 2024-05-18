<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Review;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    function index(){
        $review =  Review::paginate(15);

        //$review =  DB::table('reviews'); // Lấy Ra toàn bộ bảng review lưu vào mảng $review

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
        $review["slug"]=$input["slug"];
        $review["description"] = $input["description"];
        $review["content"] = $input["content"];
        $review["preview_image"]=$input["image"];
        $review["category_id"]=1;
        $review["user_id"]= '5'; //chưa có user
        $review["num_view"]=0;
        $review->save();

        $seo = new SEO();
        $seo["review_id"] = $review->id;
        $seo["seo_keyword"] = $input["seo_keywords"];
        $seo["seo_description"]=$input["seo_description"];
        $seo["seo_title"] = $input["seo_title"];
        $seo -> save();
        return redirect()->route("admin.review.index");
    }
    public function edit($review_id){
        $item =Review::find($review_id);
        $seo = Seo::Where('review_id', "=", $review_id)->get();
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        //print_r($seo);
        $seo_0 = $seo[0];
//        print_r($seo);
//        exit;
        return view("admin.content.review.edit", ["categories"=>$categories, "item"=>$item,"seo" => $seo_0]);

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
