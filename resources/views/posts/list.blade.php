@include('include.header1')
        <div class="page-wrapper white-section clearfix">
            <div class="row">
                <div class="col-md-8">
                    <h2>Blog</h2>
                </div><!-- end col -->

                <div class="col-md-4">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div><!-- end row -->
            <hr>

            <!-- START BUILDER -->

            <div class="row">
                <div id="content" class="col-md-9 col-sm-12">

                        @foreach ($posts as $post)
                        <div class="blog-wrap">
                            <div class="blog-media">
                                <a href="{{ asset('/post/'.$post->post_name) }}" title=""><img src="upload/blog_01.jpg" alt="" class="img-responsive"></a>
                            </div><!-- end blog media -->
                            <div class="post-date">
                                <span class="day">{{ date_format($post->post_date, 'd') }}</span>
                                <span class="month">{{ date_format($post->post_date, 'M') }}</span>
                            </div><!-- end post-date -->
                            <div class="post-content">
                                <h2><a href="{{ asset('/post/'.$post->post_name) }}">{{ $post->post_title }}</a></h2>
                                    <p>{{ $post->post_content }}</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">{{ get_the_author_meta( 'display_name', $post->post_author ) }}</a> </span>
                                    <span><i class="fa fa-tag"></i>
                                    @foreach (get_the_category($post->ID) as $cat)
                                        <a href="#">{{ $cat->name }}</a>
                                    @endforeach</span>
                                    <span><i class="fa fa-comments"></i> <a href="#">{{ $post->comment_count }} Comments</a></span>
                                </div><!-- end post-meta -->
                            </div><!-- post-content -->
                        </div><!-- end blog-wrapper -->
                        @endforeach

                        <div class="blog-wrap">
                            <div class="blog-media">
                                <iframe src="http://player.vimeo.com/video/59160472?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0"></iframe>
                            </div><!-- end blog media -->
                            <div class="post-date">
                                <span class="day">14</span>
                                <span class="month">Feb</span>
                            </div><!-- end post-date -->
                            <div class="post-content">
                                <h2><a href="single.html">Kalista on the Model of the Year</a></h2>
                                    <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu seloofwaardig ogen. Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu seloofwaardig ogen.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">Jenny Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Galleries</a></span>
                                    <span><i class="fa fa-comments"></i> <a href="#">21 Comments</a></span>
                                </div><!-- end post-meta -->
                            </div><!-- post-content -->
                        </div><!-- end blog-wrapper -->

                        <div class="blog-wrap">
                            <div class="blog-media">
                                <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="upload/slider_01.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="upload/slider_02.jpg" alt="">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        <i class="sr-only">Previous</i>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        <i class="sr-only">Next</i>
                                    </a>
                                </div>
                            </div><!-- end blog media -->
                            <div class="post-date">
                                <span class="day">12</span>
                                <span class="month">Feb</span>
                            </div><!-- end post-date -->
                            <div class="post-content">
                                <h2><a href="single.html">Post Carousel Element</a></h2>
                                    <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu seloofwaardig ogen. Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu seloofwaardig ogen.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">Jenny Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Galleries</a></span>
                                    <span><i class="fa fa-comments"></i> <a href="#">21 Comments</a></span>
                                </div><!-- end post-meta -->
                            </div><!-- post-content -->
                        </div><!-- end blog-wrapper -->

                        <div class="blog-wrap">
                            <div class="blog-media">
                                <blockquote class="customquote">
                                    <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door</p>
                                    <p>- Nunnery Scene</p>
                                </blockquote><!-- end advertise-widget -->
                            </div><!-- end blog media -->
                        </div><!-- end blog-wrapper -->

                        <nav>
                            <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                            </ul>
                        </nav>

                </div><!-- end content -->

                @include('include.right-sidebar')

            </div><!-- end row -->
        </div><!-- end white -->

        @include('include.fromtheshop')

    </div><!-- end container -->

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="120" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div class="footer-bg text-center hidden-xs">
        <img src="images/footer.png" alt="" class="img-responsive">
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Payment Methods</h4>
                        </div><!-- end section-title -->

                        <ul class="list-inline payments">
                            <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-wallet fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-stripe fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>We're available 24/7</h4>
                        </div><!-- end section-title -->

                        <div class="big-call">
                            <span><i class="fa fa-phone"></i> +90 123 45 67</span>
                            <span><i class="fa fa-fax"></i> +90 123 45 68</span>
                        </div>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>We Are Kalista</h4>
                        </div><!-- end section-title -->
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also re..</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div><!-- end section-title -->
                        <ul>
                            <li><a href="#">Homepage</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Terms of usage</a></li>
                            <li><a href="#">Copyrights</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-title">
                        <h4>Get In Touch</h4>
                    </div><!-- end section-title -->
                    <ul>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                        <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                    </ul>
                    <div class="big-social">
                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                    </div><!-- end big-social -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Useful Links</h4>
                        </div><!-- end section-title -->
                        <ul>
                            <li><a href="#">Delivery Time</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Secure Payment</a></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- container -->
    </footer>

    <div class="copyrights text-center">
        <p>Powered by HTML5 CSS3 Bootstrap - Designed by TemplateVisual Pvt Ltd © 2015</p>
    </div><!-- end copy -->

    <div class="backtotop"><i class="fa fa-arrow-up"></i> </div>
@include('include.footer')