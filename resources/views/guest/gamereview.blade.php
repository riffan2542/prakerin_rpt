<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Egames - Gaming Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template/egames/img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/egames/style.css') }}">

</head>

<body>
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
                            <a href="index.html"><img src="{{ asset('template/egames/img/core-img/logo.png') }}" alt=""></a>
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
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="game-review.html">Games</a>
                                        <ul class="dropdown">
                                            <li><a href="/gamereview">Game Review</a></li>
                                            <li><a href="/singlegame">Single Game Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/post">Articles</a></li>
                                            <li><a href="/gamereview">Game Review</a></li>
                                            <li><a href="/singlegame">Single Game Review</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                        </li>
                                    <li><a href="/singlegame">Reviews</a>
                                        <ul class="dropdown">
                                            <li><a href="/gamereview">Game Review</a></li>
                                            <li><a href="/singlegame">Single Game Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
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
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(template/egames/img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Review</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Game Review Area Start ##### -->
    <section class="game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{ asset('template/egames/img/bg-img/28.jpg') }}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">NFS 2018</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/app-store.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/google-play.png') }}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{ asset('template/egames/img/bg-img/29.jpg') }}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Call of Duty</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/app-store.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/google-play.png') }}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>8.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{ asset('template/egames/img/bg-img/30.jpg') }}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Star Wars</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/app-store.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/google-play.png') }}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.3</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img style="width:800px; height:330px" src="{{ asset('template/egames/img/bg-img/evil.jpg') }}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Horror</span>
                            <a href="single-game-review.html" class="game-title">Residen Evil 2 </a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/app-store.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/google-play.png') }}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{ asset('template/egames/img/bg-img/34.jpg') }}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Destiny 2</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/app-store.png') }}" alt=""></a>
                                    <a href="#"><img src="{{ asset('template/egames/img/core-img/google-play.png') }}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>8.2</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-100">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Game Review Area End ##### -->

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
                                <a href="index.html"><img src="{{ asset('template/egames/img/core-img/logo2.png') }}" alt=""></a>
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
                                <li><a href="single-game-review.html">Reviews</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('template/egames/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('template/egames/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('template/egames/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('template/egames/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('template/egames/js/active.js') }}"></script>
</body>

</html>