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
                                @for($i=1; $i<=3; $i++)
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
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 trending mt-lg-0 mt-5">
                    <h3 class="section-title-left">Trending </h3>
                    @foreach($trend as $item)
                        <div class="grids5-info">
                            <h4>{{$loop->index +1}}</h4>
                            <div class="blog-info">
                                <a href="{{route('frontend.detail',$item->id)}}" class="blog-desc1"> {{$item -> name}}
                                </a>
                                <div class="author align-items-center mt-2 mb-1">
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

                    @endforeach

                </div>
            </div>
            <!-- //block -->

            <!-- block -->
            <!-- //block-->

            <!-- block -->
            <div class="row mt-5 pt-5">
                <div class="col-lg-9 most-recent">
                    <h3 class="section-title-left">Most Recent posts </h3>
                    <div class="list-view ">
                        <div class="grids5-info img-block-mobile">
                            <div class="blog-info align-self">
                                <span class="category">Technology</span>
                                <a href="#blog-single" class="blog-desc mt-0">Curated Collection Post : 8 Examples of
                                    Evolution in Action
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores placeat elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="assets/images/8.jpg"
                                                                                          alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Based on your reading history</span>
                                <a href="#blog-single" class="blog-desc mt-0">The Key Benefits of Studying Online
                                    [Infographic]
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="assets/images/9.jpg"
                                                                                          alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Culture</span>
                                <a href="#blog-single" class="blog-desc mt-0">How to Write a Blog Post: A Step-by-Step
                                    Guide
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="assets/images/16.jpg"
                                                                                          alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="row most-recent-inner my-5 py-lg-4">
                            <div class="col-md-6">
                                <div class="list-view list-view1">
                                    <div class="grids5-info">
                                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/10.jpg"
                                                                                         alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">Home to write High-Level blog
                                                posts
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grids5-info mt-5">
                                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/11.jpg"
                                                                                         alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">9 Reasons why your Blog posts are
                                                Hard to Read
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-md-0 mt-5">
                                <div class="list-view list-view1">
                                    <div class="grids5-info">
                                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/12.jpg"
                                                                                         alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">How to run a Blog lead generation
                                                Analysis
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="grids5-info mt-5">
                                        <a href="#blog-single" class="d-block zoom"><img src="assets/images/13.jpg"
                                                                                         alt="" class="img-fluid radius-image news-image"></a>
                                        <div class="blog-info align-self">
                                            <a href="#blog-single" class="blog-desc1">The Anatomy of a perfect Blog post
                                            </a>
                                            <div class="author align-items-center mt-3 mb-1">
                                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                            </div>
                                            <ul class="blog-meta">
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> April 13, 2020 </span>
                                                </li>
                                                <li class="meta-item blog-students">
                                                    <span class="meta-value"> 6min read</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Sports and Fitness</span>
                                <a href="#blog-single" class="blog-desc mt-0">Ivy Goes Mobile With New App for Designers
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="assets/images/14.jpg"
                                                                                          alt="" class="img-fluid radius-image news-image"></a>
                        </div>

                        <div class="grids5-info img-block-mobile mt-5">
                            <div class="blog-info align-self">
                                <span class="category">Health and Food </span>
                                <a href="#blog-single" class="blog-desc mt-0">What I Wish I Had Known Before Writing My
                                    First Book
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur accusamus
                                    voluptas. Mollitia, natus ipsam maiores beatae elit.</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                            <a href="#blog-single" class="d-block zoom mt-md-0 mt-3"><img src="assets/images/15.jpg"
                                                                                          alt="" class="img-fluid radius-image news-image"></a>
                        </div>

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
                <div class="col-lg-3 trending mt-lg-0 mt-5 mb-lg-5">
                    <div class="pos-sticky">
                        <h3 class="section-title-left">Trending </h3>

                        <div class="grids5-info">
                            <h4>01.</h4>
                            <div class="blog-info">
                                <a href="#blog-single" class="blog-desc1"> 10 Fresh Ways to Get Better Results From Your
                                    Blog Posts
                                </a>
                                <div class="author align-items-center mt-2 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids5-info">
                            <h4>02.</h4>
                            <div class="blog-info">
                                <a href="#blog-single" class="blog-desc1"> How to Optimize for on-page SEO.
                                </a>
                                <div class="author align-items-center mt-2 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids5-info">
                            <h4>03.</h4>
                            <div class="blog-info">
                                <a href="#blog-single" class="blog-desc1"> What to Post on the Instagram
                                </a>
                                <div class="author align-items-center mt-2 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grids5-info">
                            <h4>04.</h4>
                            <div class="blog-info">
                                <a href="#blog-single" class="blog-desc1"> 18 Photo & Video Ideas to Spark Inspiration
                                </a>
                                <div class="author align-items-center mt-3 mb-1">
                                    <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                                </div>
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> April 13, 2020 </span>
                                    </li>
                                    <li class="meta-item blog-students">
                                        <span class="meta-value"> 6min read</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //block-->

            <!-- ad block -->
            <div class="ad-block text-center mt-5">
                <a href="#url"><img src="assets/images/ad.gif" class="img-fluid" alt="ad image" /></a>
            </div>
            <!-- //ad block -->

        </div>
    </div>
@endsection
