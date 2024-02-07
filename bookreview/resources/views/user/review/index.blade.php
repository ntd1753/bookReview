@extends("layout.userLayoutPage")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách bài viết:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <a href="{{route('user.review.add')}}"><button type="button" class="btn btn-outline-success mb-3"><i class="ri-add-fill"></i>Thêm bài viết</button></a>
                            @if($reviews)
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>mô tả</th>
                                        <th>ảnh preview</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-left">
                                    @include("user.review.row_table",["reviews"=>$reviews])
                                    </tbody>
                                </table>

                            @else
                                <div> Bạn chưa có bài viết nào</div>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>mô tả</th>
                                        <th>ảnh preview</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-left">
                                    @include("user.review.row_table",["reviews"=>$reviews])
                                    </tbody>
                                </table>

                            @endif
                        </div>
                        @include("user.review.review_modal",["reviews"=>$reviews])

                        {{ $reviews->onEachSide(5)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("admin.content.review.seo_modal",["reviews"=>$reviews])
@endsection
