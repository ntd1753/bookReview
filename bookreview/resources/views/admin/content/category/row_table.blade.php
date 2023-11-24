@foreach($categories as $item)
    <tr>
        <td contenteditable="true">{{$item->id }}</td>
        <td contenteditable="true">{{str_repeat("----", $level)}}  {{$item->category_name}}</td>
        <td contenteditable="true">{{$item->category_slug}}</td>
        <td>
            <a href="{{route('admin.category.edit',$item->id )}}"><button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="ion-wrench"></i></button></a>
            <a href="{{route('admin.category.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');"><button type="button" class="btn mb-3 btn-danger"><i class="ion-trash-b"></i></button></a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach
