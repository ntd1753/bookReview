@extends("layout.adminLayoutPage")
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Thêm menu</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.menu.store")}}" method="POST">
                <div class="form">
                    @csrf
                    <div class="">
                        <label for="menuName">Tên menu</label>
                        <input type="text" class="form-control" id="menuName" name="menu_name" placeholder="Nhập tên menu...">
                    </div>

                    <div class="">
                        <label for="menu-url">url</label>
                        <input type="text" class="form-control" id="menu-url" name="menu_url" placeholder="Nhập url của menu..." >
                    </div>

                    <div class="">
                        <label for="validationDefault04">menu cha</label>
                        <select class="form-control" id="validationDefault04" name="menu_parent_id">
                            <option value="0" selected>Không có menu cha</option>
                            @include('admin.content.menu.menu_option', ["menus" =>$menus, 'level' => 0])
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
