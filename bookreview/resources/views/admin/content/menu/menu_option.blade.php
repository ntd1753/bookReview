@foreach($menu as $menuItem)
    <option value="{${Item->id}}">{{str_repeat("----", $level).$menuItem->menu_name}}</option>
{{--    @if($menuItem->childs)--}}
{{--        @include('admin.content.menu.menu_option', ["menu" =>$menuItem->childs, 'level' => $level+1])--}}
{{--    @endif--}}
@endforeach
