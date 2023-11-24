@extends("layout.adminLayoutPage")
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Thêm bài viết</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.review.store")}}" method="POST">
                <div class="form">
                    @csrf
                    <div class="">
                        <label for="reviewName">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="reviewName" name="name" placeholder="Nhập tiêu đề bài viết ...">
                    </div>

                    <div class="">
                        <label for="description">mô tả</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Nhập description....." >
                    </div>
                    <div class="">
                        <label for="content">Nội dung</label>
                        <input type="text" class="form-control" id="content" name="content" placeholder="Nhập nội dung ....." >
                    </div>
                    <div class="">
                        <label for="validationDefault04">Danh mục</label>
                        <select class="form-control" id="validationDefault04" name="category_id">
                            <option value="0" selected>Không có danh mục</option>
                            @include('admin.content.review.category_option', ["categories" =>$categories, 'level' => 0])
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="preview-image">Chọn ảnh bài viết</label><br>
                        <input type="text" class="form-control" id="preview_image" name="preview_image" placeholder="Nhập link ảnh ....." >
{{--                        <input type="file" class="" id="preview-image" name="preview_image" placeholder="Nhập nội dung ....." >--}}
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
