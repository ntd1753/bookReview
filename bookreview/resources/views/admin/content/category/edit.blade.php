@extends("layout.adminLayoutPage")
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Sửa thông tin danh mục</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.category.edit",$item->id)}}" method="POST">
                <div class="form">
                    @csrf
                    <div class="">
                        <label for="categoryName">Tên danh mục</label>
                        <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Nhập tên danh mục..." value="{{$item->category_name}}">
                    </div>

                    <div class="">
                        <label for="categorySlug">Slug</label>
                            <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Nhập slug của danh mục..."  value="{{$item->category_slug}}">
                    </div>

                    <div class="">
                        <label for="validationDefault04">Danh mục cha</label>
                        <select class="form-control" id="validationDefault04" name="category_id">
                            <option value="0">Không có danh mục cha</option>
                            @include("admin.content.review.category_selected_option", ["categories"=>$categories, "level"=>0, "item"=>$item])
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
