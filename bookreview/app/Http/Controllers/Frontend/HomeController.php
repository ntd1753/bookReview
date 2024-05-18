<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    function index(){
        $review= Review::orderBy('id', 'desc')->get();
        $trend= Review::orderBy("num_view",'desc')->take(5)->get();

        return view("frontend.home",["reviews" => $review,"trend" => $trend]);

    }
    function detail($id){
        $post=Review::find($id);
        return view("frontend.detail",['post' => $post]);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $reviews = Review::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->paginate(5) // Thay đổi số 10 bằng số lượng mục bạn muốn phân trang
            ->through(function ($review) {
                $review->formatted_updated_at = Carbon::parse($review->updated_at)->format('F j, Y');
                return $review;
            });
        return view('frontend.search',['review'=>$reviews,'searchTerm'=>$searchTerm]);
    }
    public function searchMenu($url,$id)
    {
        $menu=Category::find($id);
        $review=Review::where('category_id',$id)->paginate(5);
        //dd($id);
        return view('frontend.menu',['review'=>$review,'menu'=>$menu]);
    }
}
