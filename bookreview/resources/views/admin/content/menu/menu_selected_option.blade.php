@foreach($menus as $menuItem)
    @if($menuItem->id === $item->menu_parent_id)
        <option value="{{$menuItem->id}}" selected>{{str_repeat("----", $level).$menuItem->menu_name}}</option>
    @else
        <option value="{{$menuItem->id}}">{{str_repeat("----", $level).$menuItem->menu_name}}</option>
    @endif
{{--    @if($menuItem->childs)--}}
{{--        @include('admin.content.menu.menu_selected_option', ["menu" =>$menuItem->childs, 'level' => $level+1, "item"=>$item])--}}
{{--    @endif--}}
@endforeach
