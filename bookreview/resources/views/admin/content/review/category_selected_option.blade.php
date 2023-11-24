@foreach($categories as $category)
    @if($category->id === $item->category_id)
        <option value="{{$category->id}}" selected>{{str_repeat("----", $level).$category->category_name}}</option>
    @else
        <option value="{{$category->id}}">{{str_repeat("----", $level).$category->category_name}}</option>
    @endif
    @if($category->childs)
        @include('admin.content.category.category_selected_option', ["categories" =>$category->childs, 'level' => $level+1, "item"=>$item])
    @endif
@endforeach
