@foreach($menus as $item)
    <tr>
        <td contenteditable="true">{{$item->id }}</td>
        <td contenteditable="true">{{str_repeat("----", $level)}}  {{$item->menu_name}}</td>
        <td contenteditable="true">{{$item->menu_url}}</td>
        <td>
            <a href="{{route('admin.menu.edit',$item->id )}}">Sửa</a>
            <a href="{{route('admin.menu.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.menu.row_table', ["menus"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach
