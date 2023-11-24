@extends("layout.adminLayoutPage")
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Sửa thông tin menu</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.menu.edit",$item->id)}}" method="POST">
                <div class="form">
                    @csrf
                    <div class="">
                        <label for="categoryName">Tên menu</label>
                        <input type="text" class="form-control" id="categoryName" name="menu_name" placeholder="Nhập tên danh mục..." value="{{$item->menu_name}}">
                    </div>

                    <div class="">
                        <label for="categorySlug">Slug</label>
                            <input type="text" class="form-control" id="categorySlug" name="menu_url" placeholder="Nhập url..."  value="{{$item->menu_url}}">
                    </div>

                    <div class="">
                        <label for="validationDefault04">menu cha</label>
                        <select class="form-control" id="validationDefault04" name="menu_parent_id">
                            <option value="0">Không có danh mục cha</option>
                            @include("admin.content.menu.menu_selected_option", ["menus"=>$menus, "level"=>0, "item"=>$item])
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
