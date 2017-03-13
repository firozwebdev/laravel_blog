@extends('../master')
@section('content')

    <div class="posts-wrap col-md-8">



        <div class="post single-post">
            <!-- Post img -->

            <a class="post-img-a" href="single.html#"><img src="{{ asset('admin_asset/upload/'.$post->blog_image) }}" alt="post img"></a>

            <div class="post-info">
                <!-- Post Title -->
                <h2 class="post-title">{{ $post->blog_title }}</h2>
                <!-- Post Meta Data -->
                <div class="post-meta">
                    <a href="single.html#" class="post-meta-category"><i class="fa fa-folder-open"></i>Entertainment</a>
                    <a href="single.html#" class="post-meta-date"><i class="fa fa-clock-o"></i>29 Jun 2015</a>
                    <a href="single.html#" class="post-meta-comments" data-toggle="tooltip" data-placement="top" title="12"><i class="fa fa-comment"></i></a>
                </div>
                <!-- Post Exepert -->
                <div class="post-content">
                    {{ strip_tags($post->blog_description) }}
                </div>
                <!-- Post footer -->
                <div class="post-footer">
                    <ul class="share-icons">
                        <li>
                            <a href="single.html#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <!-- About Author
        =============================================================== -->
        <div class="post single-post about_author">
            <div class="post-info">
                <!--  Title -->
                <h3 class="about_author-title">About Author</h3>

                <!--  Content -->
                <div class="about_author-content">


                    <div class="author_photo"><img src="{{ asset('admin_asset/author.jpg') }}" alt="Author Photo"></div>
                    <div class="author_bio">
                        <h2 class="author_name"><a href="single.html#">Medhat Albsougy</a></h2>
                        <p>
                            The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                        </p>
                    </div>
                </div>
                <!-- footer -->
                <div class="author-footer">
                    <ul class="share-icons">
                        <li>
                            <a href="single.html#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="single.html#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        
        


        <!-- Related Posts
        =============================================================== -->
        <div class="post single-post related-posts">
            <div class="post-info">
                <!--  Title -->
                <h3 class="about_author-title">Related Posts</h3>

                <!--  Content -->
                <div class="additional-content">

                    @foreach($related_posts as $related_post)

                    <!-- Related Single Post -->
                    <div class="related_post">

                        <a href="single.html#" class="related_post_img_a"><img style="width:50px;height:50px;" src="{{ asset('admin_asset/upload/'.$related_post->blog_image) }}" alt="Widget Post IMG"></a>
                        <div class="related_post_body">
                            <h4><a href="single.html#">{{ $related_post->blog_title }}</a></h4>
                            <span>15. MARCH 2015</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                   @endforeach

                </div>


            </div>
        </div>

        <!-- Comments
        =============================================================== -->
        <div class="post single-post comments">
            <div class="post-info">
                <!--  Title -->
                <h3 class="about_author-title">Comments</h3>

                <!--  Content -->
                <div class="about_author-content">

                    <div class="single_comment">

                        <img src="{{ asset('front-end/imgs/comment_auth.jpg') }}" class="comment_author_img" alt="Author Photo">
                        <div class="author_com_wrap">
                            <h2 class="author_name">Medhat Albsougy</h2>
                            <p class="comment_date">JULY 21, 2015 AT 3:26 AM</p>
                            <p>
                                The European languages are members of the same family.
                            </p>
                        </div>
                    </div>

                    <div class="single_comment">

                        <img src="{{ asset('front-end/imgs/comment_auth.jpg') }}" class="comment_author_img" alt="Author Photo">
                        <div class="author_com_wrap">
                            <h2 class="author_name">Cris Doe</h2>
                            <p class="comment_date">JULY 21, 2015 AT 4:14 AM</p>
                            <p>
                                Their separate existence is a myth.
                            </p>
                        </div>
                    </div>

                    <h4>Leave a reply</h4>
                    <form class="form-horizontal comment_form">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="your-email" name="email" placeholder="example@domain.com" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="website" name="website" placeholder="www.example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" id="yourMessage" rows="10" name="message" placeholder="comment"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" id="submit" class="btn btn-default">Post Comment</button>
                            </div>
                        </div>
                    </form>

                </div>


            </div>
        </div>


    </div>

@endsection
@section('sidebar')
    @include('front.partials.sidebar')
@endsection