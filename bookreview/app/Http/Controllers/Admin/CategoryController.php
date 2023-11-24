<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::where('category_parent_id','=',0)->with('childs')->paginate(15);
        return view("admin.content.category.index",["categories"=>$categories]);
    }
    public function add(){
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("admin.content.category.add", ["categories"=>$categories]);
    }
    public function store(Request $request){
       /* echo "<pre>";
        print_r($request->all());
        echo "</pre>";*/
        $input = $request->all();
        $category = new Category();
        $category["category_name"] = $input["category_name"];
        $category["category_slug"] = $input["category_slug"];
        $category["category_parent_id"] = $input["category_parent_id"];
        $category->save();
        return redirect()->route("admin.category.index");
    }
    public function edit($id){
        $item = Category::find($id);
        $categories = Category::where('category_parent_id','=',0)->with('childs')->get();
        return view("admin.content.category.edit", ["categories"=>$categories, "item"=>$item]);
    }
    public function update(Request $request, $id){
        $item = Category::find($id);

        if($item){
            $input = $request->all();
            $item["category_name"] = $input["category_name"];
            $item["category_slug"] = $input["category_slug"];
            $item["category_parent_id"] = $input["category_parent_id"];
            $item->save();
        }

        return redirect()->route("admin.category.index");
    }

    public function deleteChilds($id){
        $item = Category::find($id);
        if($item){
            if ($item->childs){
                foreach ($item->childs as $child){
                    $this->deleteChilds($child->id);
                }
            }
            $item->delete();
        }
    }
    public function destroy($id){
        $this->deleteChilds($id);
        return redirect()->route("admin.category.index");
    }
}
