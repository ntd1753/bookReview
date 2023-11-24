@foreach($menus as $menu)
    <option value="{{$menu->id}}">{{str_repeat("----", $level).$menu->menu_name}}</option>
    @if($menu->childs)
        @include('admin.content.menu.menu_option', ["menus" =>$menu->childs, 'level' => $level+1])
    @endif
@endforeach
