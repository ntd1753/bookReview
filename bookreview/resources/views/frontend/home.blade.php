@extends("layout.frontendLayoutPage")
@section("content")
    <div class="w3l-homeblock1 py-5">
        <div class="container pt-lg-5 pt-md-4">
            <!-- block -->
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="section-title-left">Bài Viết Mới</h3>
                    <div class="row">
                        @foreach($reviews as $item)
                            @if($loop->index == 0)
                                <div class="col-lg-5 col-md-6 item">
                                    <div class="card">
                                        <div class="card-header p-0 position-relative">
                                            <a href="{{route('frontend.detail',$item->id)}}">
                                                <img class="card-img-bottom d-block radius-image" src="{!! $item-> preview_image !!}"
                                                     alt="Card image cap">
                                            </a>
                                        </div>
                                        <div class="card-body p-0 blog-details">
                                            <a href="{{route('frontend.detail',$item->id)}}" class="blog-desc">{{$item -> name}}
                                            </a>
                                            <p>{!! $item -> description !!}</p>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">{{$item -> owner -> name}}</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> {{$item-> updated_at}} </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                            <a href="#featuredposts" class="btn btn-style btn-outline mt-4">All featured
                                                posts</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <div class="col-lg-7 col-md-6 mt-md-0 mt-5">
                            <div class="list-view list-view1">
                                @foreach($reviews as $item)
                                    @if($loop -> index >0 && $loop -> index <=3)
                                        <div class="grids5-info mb-5">
                                            <a href="{{route('frontend.detail',$item->id)}}" class="d-block zoom"><img src="{!! $item-> preview_image !!}" alt=""
                                                                                             class="img-fluid radius-image news-image"></a>
                                            <div class="blog-info align-self">
                                                <a href="{{route('frontend.detail',$item->id)}}" class="blog-desc1">{{$item -> name}}
                                                </a>
                                                <div class="author align-items-center mt-3 mb-1">
                                                    <a href="#author">{{$item -> owner -> name}}</a> in <a href="#url">Design</a>
                                                </div>
                                                <ul class="blog-meta">
                                                    <li class="meta-item blog-lesson">
                                                        <span class="meta-value"> {{$item-> updated_at}} </span>
                                                    </li>
                                                    <li class="meta-item blog-students">
                                                        <span class="meta-value"> 6min read</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                @include("components.trending",["$trend"=>$trend])

            </div>
            <!-- //block -->

            <!-- block -->
            <!-- //block-->

            <!-- block -->
            <div class="row mt-5 pt-5">
                <div class="col-lg-9 most-recent">
                    <h3 class="section-title-left">Most Recent posts </h3>
                    <div class="list-view ">
                        @foreach($categories as $item)
                            @if($item->reviews()->latest()->first())
                            <div class="grids5-info img-block-mobile mb-3">
                                  <div class="blog-info align-self">
                                      <span class="category">{{$item -> category_name}}</span>
                                      <a href="{{route('frontend.detail',$item->reviews()->latest()->first()->id)}}" class="blog-desc mt-0">{!!   $item ->reviews()->latest()->first()->name !!}
                                      </a>
                                      <p>{!! $item ->reviews()->latest()->first()->description !!}</p>
                                      <div class="author align-items-center mt-3 mb-1">
                                          <a href="#author">{!! $item ->reviews()->latest()->first()->owner -> name!!}</a>
                                      </div>
                                      <ul class="blog-meta">
                                          <li class="meta-item blog-lesson">
                                              <span class="meta-value"> {!!  $item ->reviews()->latest()->first()-> updated_at !!} </span>
                                          </li>
                                          <li class="meta-item blog-students">
                                              <span class="meta-value"> 6min read</span>
                                          </li>
                                      </ul>
                                  </div>
                                  <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="{{$item ->reviews()->latest()->first()-> preview_image}}"
                                                                                                alt="" class="img-fluid radius-image news-image"></a>
                            </div>

                            @endif
                        @endforeach


                    </div>
                    <!-- pagination -->
                    <div class="pagination-wrapper mt-5">
                        <ul class="page-pagination">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#url">2</a></li>
                            <li><a class="page-numbers" href="#url">3</a></li>
                            <li><a class="page-numbers" href="#url">4</a></li>
                            <li><a class="page-numbers" href="#url">....</a></li>
                            <li><a class="page-numbers" href="#url">15</a></li>
                            <li><a class="next" href="#url"><span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                    <!-- //pagination -->
                </div>
                @include("components.trending",["$trend"=>$trend])
            </div>
            <!-- //block-->


        </div>
    </div>
@endsection
