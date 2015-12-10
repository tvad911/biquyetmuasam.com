<!-- Blog Detail -->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a class="home" href="#" title="Return to Home" itemprop="url"><span itemprop="title">Home</span></a>
            </span>
            <span class="navigation-pipe">&nbsp;</span>
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a class="home" href="#" title="Blog" itemprop="url"><span itemprop="title">Blog</span></a>
            </span>
            <span class="navigation-pipe">&nbsp;</span>
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a class="home" href="#" title="Ut pharetra augue nec augue integer rutrum ante eu lacus" itemprop="url">
                    <span itemprop="title"> Ut pharetra augue nec augue integer rutrum ante eu lacus</span>
                </a>
            </span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            @include('include.left-sidebar')
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading">
                    <span class="page-heading-title2">{{ $post->post_title }}</span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i>
                        by: <a href="#">{{ get_the_author_meta( 'display_name', $post->post_author ) }}</a></span>
                        <span class="cat">
                            <i class="fa fa-folder-o"></i>
                            @if($categories)
                                @foreach ($categories as $cat)
                                    @if($cat === end($categories))
                                        <a href="#">{{ $cat->name }}</a>
                                    @else
                                        <a href="#">{{ $cat->name }}</a>,
                                    @endif
                                @endforeach
                            @endif
                        </span>
                        <span class="comment-count">
                            <i class="fa fa-comment-o"></i> {{ $post->comment_count }}
                        </span>
                        <span class="date"><i class="fa fa-calendar"></i> {{ date_format($post->post_date, 'Y-M-d h:m:s') }}</span>
                        <span class="post-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(7 votes)</span>
                        </span>
                    </div>
                    <div class="entry-photo">
                        {!!  get_the_post_thumbnail( $post->ID, 'large', array( 'style' => 'display: block;margin: 0 auto;' )) !!}
                    </div>
                    <div class="content-text clearfix">
                        {!! $post->post_content !!}
                    </div>
                    @if($tags)
                        <div class="entry-tags">
                            <span>Tags:</span>
                             @foreach ($tags as $tag)
                                @if($tag === end($tags))
                                    <a href="#">{{ $tag->name }}</a>
                                @else
                                    <a href="#">{{ $tag->name }}</a>,
                                @endif
                            @endforeach
                        </div>
                    @endif
                </article>
                {{-- @include('include.relate-post') --}}
                <!-- ./Related Posts -->
                {{-- @include('include.list-comment') --}}
                {{-- @include('include.comment-form') --}}
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
<!-- End Blog Detail