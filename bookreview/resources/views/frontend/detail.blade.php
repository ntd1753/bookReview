@extends("layout.frontendLayoutPage")
@section("content")
    <div class="mt-5"></div>
    <div class="w3l-homeblock1 py-5">
        <div class="container pt-lg-5 pt-md-4">
            {!!  $post -> content !!}
        </div>
    </div>
@endsection
