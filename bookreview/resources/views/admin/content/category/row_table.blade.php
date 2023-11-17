@foreach($categories as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$item->category_name}}</td>
        <td>{{$item->category_slug}}</td>

        <td>
            <a href="{{route('admin.category.edit',$item->id )}}">Sửa</a>
            <a href="{{route('admin.category.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach
