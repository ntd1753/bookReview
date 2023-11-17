@extends("layout.adminLayoutPage")
@section('content')
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Danh sách danh mục:</h4>
            <a href="{{route('admin.category.add')}}"><button type="button" class="btn btn-success">Thêm danh mục</button></a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>URL</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @include("admin.content.category.row_table",["categories"=>$categories, "level"=>0])
                </tbody>
            </table>
        </div>
    </div>
@endsection
