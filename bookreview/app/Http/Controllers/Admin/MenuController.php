<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.index",["menus"=>$menus]);
    }
    public function add(){
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.add", ["menus"=>$menus]);
    }
    public function store(Request $request){
//         echo "<pre>";
//         print_r($request->all());
//         echo "</pre>";
//         exit;
        $input = $request->all();
        $menu = new Menu();
        $menu["menu_name"] = $input["menu_name"];
        $menu["menu_url"] = $input["menu_url"];
        $menu["menu_parent_id"] = $input["menu_parent_id"];
        $menu->save();
        return redirect()->route("admin.menu.index");
    }
    public function edit($id){
        $item = Menu::find($id);
        $menus = Menu::where('menu_parent_id','=',0)->with('childs')->get();
        return view("admin.content.menu.edit", ["menus"=>$menus, "item"=>$item]);
    }
    public function update(Request $request, $id){
        $item = Menu::find($id);

        if($item){
            $input = $request->all();
            $item["menu_name"] = $input["menu_name"];
            $item["menu_url"] = $input["menu_url"];
            $item["menu_parent_id"] = $input["menu_parent_id"];
            $item->save();
        }

        return redirect()->route("admin.menu.index");
    }

    public function deleteChilds($id){
        $item = Menu::find($id);
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
        return redirect()->route("admin.menu.index");
    }
}
