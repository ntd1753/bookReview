@foreach($reviews as $item)
    <tr>
        <td contenteditable="true">{{$item->id }}</td>
        <td contenteditable="true">{{$item->name}}</td>
        <td contenteditable="true">{{$item->description}}</td>
        <td contenteditable="true" class="place-content-center"><img src="{{$item->preview_image}}" class="img-fluid avatar-80 "> </td>
        <td>
            <a href="{{route('admin.review.edit',$item->id)}}"><button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="ion-wrench"></i></button></a>
            <a href="{{route('admin.review.destroy',$item->id)}}"
               onclick="return confirm('Bạn có muốn xóa không?');"><button type="button" class="btn mb-3 btn-danger"><i class="ion-trash-b"></i></button></a>
        </td>
    </tr>
@endforeach
