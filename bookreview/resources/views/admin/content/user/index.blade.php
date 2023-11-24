@extends("layout.adminLayoutPage")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách người dùng:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <a href="{{route('admin.review.add')}}"><button type="button" class="btn btn-outline-success mb-3"><i class="ri-add-fill"></i>Thêm bài viết</button></a>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>email</th>
                                    <th>user_name</th>
                                    <th>phone_number</th>
                                    <th>address</th>
                                    <th>avatar</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody class="text-left">
                                @include("admin.content.user.row_table",["users"=>$users])
                                </tbody>
                            </table>
                        </div>
                        {{ $users->onEachSide(5)->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
