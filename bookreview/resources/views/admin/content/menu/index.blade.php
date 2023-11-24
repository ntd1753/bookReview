@extends("layout.adminLayoutPage")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách menu:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <a href="{{route('admin.menu.add')}}"><button type="button" class="btn btn-outline-success mb-3"><i class="ri-add-fill"></i>Thêm menu</button></a>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên menu</th>
                                    <th>URL</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody class="text-left">
                                @include("admin.content.menu.row_table",["menus"=>$menus, "level"=>0])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
