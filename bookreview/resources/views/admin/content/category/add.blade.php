@extends("layout.adminLayoutPage")
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Sửa thông tin danh mục</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.category.store")}}" method="POST">
                <div class="form">
                    @csrf
                    <div class="">
                        <label for="categoryName">Tên danh mục</label>
                        <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Nhập tên danh mục...">
                    </div>

                    <div class="">
                        <label for="categorySlug">Slug</label>
                        <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Nhập slug của danh mục..." >
                    </div>

                    <div class="">
                        <label for="validationDefault04">Danh mục cha</label>
                        <select class="form-control" id="validationDefault04" name="category_parent_id">
                            <option value="0" selected>Không có danh mục cha</option>
                            @include('admin.content.category.category_option', ["categories" =>$categories, 'level' => 0])
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
