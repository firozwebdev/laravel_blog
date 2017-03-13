
@extends('../master')
@section('slider')
    @include('front.partials.slider')
@endsection
@section('content')

<div class="posts-wrap col-md-8">


@foreach($posts as $post)
    <div class="list-post">
        <div class="row">

            <div class="col-sm-6">
                <a href="index_list.html#" class="post-meta-category"><i class="fa fa-folder-open"></i>{{ $post->category_name }}</a>
                <!-- Post img -->
                <a class="post-img-a" href="index_list.html#"><div style="background-image: url('admin_asset/upload/{{ $post->blog_image }}');"></div></a>
            </div>

            <div class="col-sm-6">
                <div class="post-info">
                    <!-- Post Title -->
                    <h2 class="post-title"><a href="index_list.html#">{{ $post->blog_title }}</a></h2>
                    <!-- Post Meta Data -->
                    <div class="post-meta">
                        <a href="index_list.html#" class="post-meta-date"><i class="fa fa-clock-o"></i>29 Jun 2015</a>
                        <a href="index_list.html#" class="post-meta-comments" data-toggle="tooltip" data-placement="top" title="12"><i class="fa fa-comment"></i></a>
                    </div>
                    <!-- Post Exepert -->
                    <div class="post-exepert">
                        {{ str_limit(strip_tags($post->blog_description, 170)) }}
                    </div>
                    <!-- Post footer -->
                    <div class="post-footer">

                        <div class="share-wrap">
                            <a href="index_list.html#" class="share-button"><i class="fa fa-share-alt"></i></a>

                            <ul class="share-icons">
                                <li>
                                    <a href="index_list.html#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index_list.html#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="index_list.html#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="index_list.html#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="index_list.html#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="arrow-down"></li>
                            </ul>

                        </div>
                        <a href="{{ route('single.post',['category_id'=> $post->category_id,'blog_id'=> $post->blog_id]) }}" class="post-read-more">Read More</a>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endforeach

    <nav class="pagination_wrap">
        <ul class="pagination">
            <li>
                <a href="index_grid.html#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="index_grid.html#">1</a></li>
            <li><a href="index_grid.html#">2</a></li>
            <li><a href="index_grid.html#">3</a></li>
            <li><a href="index_grid.html#">4</a></li>
            <li><a href="index_grid.html#">5</a></li>
            <li>
                <a href="index_grid.html#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>
@endsection

@section('sidebar')
   @include('front.partials.sidebar')
@endsection
