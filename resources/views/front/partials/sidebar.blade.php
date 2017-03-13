
<div class="sidebar-wrap col-md-4">

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">About Me</h3>
        <div class="widget_body">

            <div class="about_photo"><img src="{{ asset('front-end/imgs/author.jpg') }}" alt="Author Photo"></div>

            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth beard Helvetica.</p>
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
            </ul>
        </div>
    </div>

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Text Sample</h3>
        <div class="widget_body">
            <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth beard Helvetica.</p>
        </div>
    </div>

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Latest Posts</h3>
        <div class="widget_body">

            <?php
            $posts = DB::table('blog')
                    ->select('*')
                    ->get();

            ?>
            @foreach($posts as $post)

                <!-- Widget Single Post -->
                <div class="widget_post">

                    <a href="index_list.html#" class="widget_post_img_a"><img src="{{ asset('admin_asset/upload/'.$post->blog_image) }}" alt="Widget Post IMG"></a>
                    <div class="widget_post_body">
                        <h4><a href="index_list.html#">{{ $post->blog_title }}</a></h4>
                        <span>15. MARCH 2015</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    
     <div class="widget">
        <h3 class="widget_title">Popular Posts</h3>
        <div class="widget_body">

            <?php
            $popular_posts = DB::table('blog')
                         ->select('*')
                         ->orderBy('counter', 'desc')
                         ->get();

            ?>
            
            @foreach($popular_posts as $popular_post)

                <!-- Widget Single Post -->
                <div class="widget_post">

                    <a href="index_list.html#" class="widget_post_img_a"><img src="{{ asset('admin_asset/upload/'.$popular_post->blog_image) }}" alt="Widget Post IMG"></a>
                    <div class="widget_post_body">
                        <h4><a href="index_list.html#">{{ $popular_post->blog_title }}</a></h4>
                        <span>15. MARCH 2015</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Post Gallery</h3>
        <div class="widget_body">
            <div class="instagram">

                <?php
                $posts = DB::table('blog')
                        ->select('*')
                        ->take(9)
                        ->get();

                ?>

                @foreach($posts as $post)

                    <a href="index_list.html#"><img src="{{ asset('admin_asset/upload/'.$post->blog_image) }}" alt="<?php $post->blog_title; ?>"></a>

                @endforeach

            </div>
        </div>
    </div>

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Categories</h3>
        <div class="widget_body">
            <ul class="cats">
                <?php
                $categories = DB::table('category')
                                ->select('*')
                                ->get();

                ?>
                    @foreach($categories as $category)
                      <li><a href="index_list.html#">{{ $category->category_name }}</a></li>
                    @endforeach

            </ul>
        </div>
    </div>

    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Post Slider</h3>
        <div class="widget_body">


            <div class="post_slider">
                <?php

                $posts = DB::table('blog')
                        ->select('*')
                        ->get();
                ?>
                @foreach($posts as $post)
                    <div class="post_slider">
                        <a href="index_list.html#"><img src="{{ asset('admin_asset/upload/'.$post->blog_image) }}"  alt="Post Slider Image">{{ $post->blog_title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Single Widget -->
    <div class="widget">
        <h3 class="widget_title">Tags</h3>
        <div class="widget_body">

            <ul class="tags">
                <li><a href="index_list.html#">Music</a></li>
                <li><a href="index_list.html#">Fashion</a></li>
                <li><a href="index_list.html#">Media</a></li>
                <li><a href="index_list.html#">Internet</a></li>
                <li><a href="index_list.html#">Technology</a></li>
                <li><a href="index_list.html#">Design</a></li>
                <li><a href="index_list.html#">Travel</a></li>
                <li><a href="index_list.html#">Sports</a></li>
                <li><a href="index_list.html#">Lifestyle</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>


</div>
