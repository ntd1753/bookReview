@extends("layout.adminLayoutPage")
@section('content')
    <div class="forms">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
            <div class="form-title">
                <h4> Sửa thông tin danh mục</h4>
            </div>
            <div class="form-body">
                <form action="{{route("admin.category.edit",$item->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Tên danh mục</label>
                        <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Nhập tên danh mục..." value="{{$item->category_name}}">
                    </div>
                    <div class="form-group">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Nhập slug của danh mục..."  value="{{$item->category_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Danh mục cha</label>
                        <select class="form-control" id="categoryParentId" name="category_parent_id">
                            <option value="0">Không có danh mục cha</option>
                            @include("admin.content.category.category_selected_option", ["categories"=>$categories, "level"=>0, "item"=>$item])
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
      </div>
@endsection
