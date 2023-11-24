@foreach($users as $item)
    <tr>
        <td contenteditable="true">{{$item->id}}</td>
        <td contenteditable="true">{{$item->email}}</td>
        <td contenteditable="true">{{$item->name}}</td>
        <td contenteditable="true">{{$item->phone}}</td>
        <td contenteditable="true">{{$item->address}}</td>
        <td contenteditable="true" class="place-content-center"><img src="{{$item->avatar}}" class="img-fluid avatar-80 "> </td>
        <td>
            <a href="#">Sửa</a>
            <a href="#"
               onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a>
        </td>
    </tr>
@endforeach
