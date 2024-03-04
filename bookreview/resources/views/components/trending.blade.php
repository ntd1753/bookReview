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
