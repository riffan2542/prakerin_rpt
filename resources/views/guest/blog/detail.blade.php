@extends('layouts.guesttmp')

@section('title') All Blog @endsection

@section('content')

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.html"><img src="/template/egames/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="#" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Login Area -->
                            <div class="login-area">
                                <a href="#"><span>Login / Register</span> <i class="fa fa-lock" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="game-review.html">Games</a>
                                        <ul class="dropdown">
                                            <li><a href="game-review.html">Game Review</a></li>
                                            <li><a href="single-game-review.html">Single Game Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="post.html">Articles</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="game-review.html">Game Review</a></li>
                                            <li><a href="single-game-review.html">Single Game Review</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="post.html">Articles</a>
                                        <ul class="dropdown">
                                            <li><a href="/index">Articles</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-game-review.html">Reviews</a>
                                        <ul class="dropdown">
                                            <li><a href="game-review.html">Game Review</a></li>
                                            <li><a href="single-game-review.html">Single Game Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(/template/egames/img/bg-img/23.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Article</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-0-100">
        <div class="container"> 
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">
                        <div class="post-details-content mb-100">

<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
                <h3>{{ $artikel->judul }}</h3>
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
                                <div class="single-post">
                                        <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="" style="height: 500px; width:  600px;">
                                        <ul class="tags">
                                            @foreach($artikel->tag as $tag)
                                                <li><a href="blog/tag/">{{ $tag->nama_tag }}</a></li>
                                            @endforeach
                                        </ul>
                                        {{--  <a href="{{ route('detail.blog', $artikel->slug) }}">
                                        </a><br>  --}}
                                            <p>
                                                {!! $artikel->konten !!}
                                            </p>
                                        <div class="bottom-meta">
                                            <div class="user-details row align-items-center">
                                            </div>
                                        </div>

                        </div>
					</div>
				</div>
			</section>
		<!-- End blog-posts Area -->

                            {{--  <div class="blog-thumbnail mb-50">
                                <img src="/template/egames/img/bg-img/24.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h4 class="post-title">Sony’s new releases for 2018</h4>
                                <div class="post-meta mb-30">
                                    <a href="#" class="post-date">July 12, 2018</a>
                                    <a href="#" class="post-author">By Admin</a>
                                    <a href="#" class="post-comments">2 Comments</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.Aenean ut eros in ligula mollis lacinia eu in metus. In diam leo, convallis id nisi sed, mollis malesuada arcu. Aenean nisi tellus, posuere quis quam nec, mattis tempor dui. Suspendisse non ante mollis, fermentum erat non, fermentum neque. Phasellus vulputate, odio sit amet rhoncus interdum, est est condimentum velit, non condimentum lectus sapien id ante. Nullam sed quam hendrerit, cursus augue at, ultricies erat. Nulla sed pharetra ligula.</p>

                                <p>n vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>

                                <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est feugiat ut.</p>

                                <div class="row mt-50">
                                    <div class="col-6">
                                        <img src="/template/egames/img/bg-img/25.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="/template/egames/img/bg-img/26.jpg" alt="">
                                    </div>
                                </div>
                            </div>  --}}


                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mb-70">
                            <h4 class="mb-50">Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="/template/egames/img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">William Smith</a>
                                            <a href="#" class="post-date">July 12, 2018</a>
                                            <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                            <a href="#reply" class="reply">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="/template/egames/img/bg-img/33.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Jaku Smith</a>
                                                    <a href="#" class="post-date">July 12, 2018</a>
                                                    <p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                                    <a href="#reply" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="/template/egames/img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">James Carter</a>
                                            <a href="#" class="post-date">July 12, 2018</a>
                                            <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                            <a href="#reply" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area mb-30 clearfix" id="reply">
                            <h4 class="mb-50">Leave a reply</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn egames-btn w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mt-100">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget">
                            <a href="#"><img src="/template/egames/img/bg-img/add.png" alt=""></a>
                            <!-- Side Img -->
                            <img src="/template/egames/img/bg-img/side-img.png" class="side-img" alt="">
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area video-widget">
                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="/template/egames/img/bg-img/14.jpg" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="/template/egames/img/bg-img/15.jpg" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Tips to improve your game</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="/template/egames/img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Game reviews: the best of 2018</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="/template/egames/img/bg-img/17.jpg" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="/template/egames/img/bg-img/18.jpg" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area post-widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="/template/egames/img/bg-img/19.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="/template/egames/img/bg-img/20.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">Gaming at a new lever: 2018 new release</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="/template/egames/img/bg-img/21.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">2018 Comicon: See the lastest news</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="/template/egames/img/bg-img/22.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <a href="index.html"><img src="/template/egames/img/core-img/logo2.png" alt=""></a>
                            </div>
                            <div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>Game Reviews</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Doom</a></li>
                                        <li><a href="#">Grand Theft Auto</a></li>
                                        <li><a href="#">Bloodborne</a></li>
                                        <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>Usefull Links</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Testimanials</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">New Games</a></li>
                                        <li><a href="#">Forum</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>What’s new</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Doom</a></li>
                                        <li><a href="#">Grand Theft Auto</a></li>
                                        <li><a href="#">Bloodborne</a></li>
                                        <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-5">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                    <div class="col-12 col-sm-7">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="game-review.html">Games</a></li>
                                <li><a href="post.html">Articles</a></li>
                                <li><a hre
                                    f="single-game-review.html">Reviews</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
</body>

</html>

@endsection
