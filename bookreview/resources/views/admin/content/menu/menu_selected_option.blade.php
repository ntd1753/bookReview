@foreach($menus as $menu)
    @if($menu->id === $item->menu_parent_id)
        <option value="{{$menu->id}}" selected>{{str_repeat("----", $level).$menu->menu_name}}</option>
    @else
        <option value="{{$menu->id}}">{{str_repeat("----", $level).$menu->menu_name}}</option>
    @endif
    @if($menu->childs)
        @include('admin.content.menu.menu_selected_option', ["menus" =>$menu->childs, 'level' => $level+1, "item"=>$item])
    @endif
@endforeach
