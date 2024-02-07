@foreach($reviews as $item)
    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive-md table-striped text-center">

                        <tbody class="text-left">
                        <tr>
                            <th>seo_keyword </th>
                            <th>{!!  $item -> seo -> seo_keyword !!}</th>

                        </tr>
                        <tr>
                            <th>seo_title </th>
                            <th>{!!  $item -> seo -> seo_title !!}</th>

                        </tr>
                        <tr>
                            <th>seo_description</th>
                            <th>{!!  $item -> seo -> seo_description !!}</th>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalScrollable{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle{{$item->id}}" aria-hidden="true">
        <div class="w-10 modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Preview Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>

                <div class="modal-body">
                    {!! $item -> content !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endforeach
