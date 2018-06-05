<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Studio - Creative Photography | Portfolio</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <!-- Responsive CSS -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Did you know?</p>
            <ul>
                <li>The largest photography competition is 353,768 entries.</li>
                <li>Photography is the toughest profession in the world.</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
            </ul>
        </div>
    </div>

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- Header Area Start -->
    <header class="header-area bg-img" style="background-image: url({{asset('assets/img/bg-img/14.jpg')}});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img src="{{asset('assets/img/core-img/logo.png')}}" alt="Logo"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">contact</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <img src="{{asset('assets/img/core-img/search.png')}}" alt="">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span>Pinterest</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i> <span>Behance</span></a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->

    <!-- Project Area Start -->
    <div class="gallery_area clearfix">
        <div class="container-fluid clearfix">
            <div class="gallery_menu">
                <div class="portfolio-menu">
                    <button class="active btn" type="button" data-filter="*">All</button>
                    <button class="btn" type="button" data-filter=".portraits">Portraits</button>
                    <button class="btn" type="button" data-filter=".weddings">Weddings</button>
                    <button class="btn" type="button" data-filter=".studio">Studio</button>
                    <button class="btn" type="button" data-filter=".fashion">Fashion</button>
                    <button class="btn" type="button" data-filter=".lifestyle">Lifestyle</button>
                </div>
            </div>

            <div class="row portfolio-column">
                @foreach ($photos as $photo)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 column_single_gallery_item {{strtolower($photo->category->name)}}">
                    <img src="{{$photo->url_image}}" alt="{{$photo->name}}">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{$photo->url_image}}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center mt-70">
                    <a href="#" class="btn studio-btn"><img src="{{asset('assets/img/core-img/logo-icon.png')}}" alt=""> Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="footer-content h-100 d-md-flex align-items-center justify-content-between">
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('assets/img/core-img/map.png')}}" alt="">
                            <a href="#">Blvd Libertad, 34 m05200 Arévalo</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('assets/img/core-img/smartphone.png')}}" alt="">
                            <a href="#">0034 37483 2445 322</a>
                        </div>
                        <!-- Single Footer Content -->
                        <div class="single-footer-content">
                            <img src="{{asset('assets/img/core-img/envelope-2.png')}}" alt="">
                            <a href="#">hello@company.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

       <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
       <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/js/active.js')}}"></script>

</body>

</html>