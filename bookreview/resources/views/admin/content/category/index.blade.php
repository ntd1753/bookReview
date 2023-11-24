@extends("layout.adminLayoutPage")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách danh mục:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <a href="{{route('admin.category.add')}}"><button type="button" class="btn btn-outline-success mb-3"><i class="ri-add-fill"></i>Thêm danh mục</button></a>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>URL</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody class="text-left">
                                @include("admin.content.category.row_table",["categories"=>$categories, "level"=>0])
                                </tbody>
                            </table>
                        </div>
                        {{$categories -> links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
