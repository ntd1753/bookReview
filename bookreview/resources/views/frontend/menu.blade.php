@extends("layout.frontendLayoutPage")
@section("content")
    <div class="mt-5"></div>
    <div class="w3l-homeblock1 py-5">
        <div class="container pt-lg-5 pt-md-4">
            <div class="col-lg-12 most-recent">
                <span>We found 5 articles for you</span>
                <h3 class="section-title-left">{{$menu->category_name}}</h3>
                <div class="list-view mb-3">
                    @foreach($review as $item)
                        <div class="grids5-info mt-5">
                            <div class="blog-info">
                                <span class="category">{{$item->category->category_name}}</span>
                                <a href="{{route('frontend.detail',$item->id)}}" class="blog-desc mt-0">{{$item->name}}
                                </a>
                                <p>{!! $item->description !!}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#">Tác giả: {{ $item->owner->name}}</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> {!! $item->formatted_updated_at  !!} </span>
                                    </li>
                                </ul>
                            </div>
                            <a href="blog-single.html" class="d-block zoom"><img src="{{$item->preview_image}}" alt="" class="img-fluid radius-image news-image mt-md-0 mt-3"></a>
                        </div>

                    @endforeach

                </div>
                <!-- pagination -->
                {{$review -> links('vendor.pagination.bootstrap-4')}}
                <!-- //pagination -->
            </div>
        </div>
    </div>
@endsection
