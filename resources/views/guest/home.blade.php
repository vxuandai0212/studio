<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Studio - Creative Photography | Home</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="{{asset('assets/img/core-img/favicon.ico')}}"> -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/core-img/favicon.ico')}}"/>

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
    <header class="header-area">
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
    <div class="social-sidebar-area bg-white">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span>Pinterest</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i> <span>Behance</span></a>
        </div>
        <!-- Message Box -->
        <div class="message-box">
            <a href="#" data-toggle="modal" data-target=".contact-modal-lg"><img src="{{asset('assets/img/core-img/envelope.png')}}" alt=""></a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->
    
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <div class="carousel h-100 slide" data-ride="carousel" id="welcomeSlider">
            <!-- Carousel Inner -->
            <div class="carousel-inner h-100">
                @foreach ($photos as $photo)
                    @if ($loop->first)
                    <div class="carousel-item h-100 bg-img active" style="background-image: url({{$photo->url_image}});">
                        <div class="carousel-content h-100">
                            <div class="slide-text">
                                <span>0{{$loop->iteration}}.</span>
                                <h2> {{$photo->name}}</h2>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="carousel-item h-100 bg-img" style="background-image: url({{$photo->url_image}});">
                        <div class="carousel-content h-100">
                            <div class="slide-text">
                                <span>0{{$loop->iteration}}.</span>
                                <h2> {{$photo->name}}</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                @foreach ($photos as $photo)
                    @if ($loop->first)
                    <li data-target="#welcomeSlider" data-slide-to="{{$loop->index}}" class="active bg-img" style="background-image: url({{$photo->url_image}});"></li>
                    @else
                    <li data-target="#welcomeSlider" data-slide-to="{{$loop->index}}" class="bg-img" style="background-image: url({{$photo->url_image}});"></li>
                    @endif    
                @endforeach
            </ol>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="contact-popup-form" id="contact-modal-lg">
        <div class="modal fade contact-modal-lg" tabindex="-1" role="dialog" aria-labelledby="contact-modal-lg" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content" id="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-heading-text text-center mb-30">
                                    <span></span>
                                    <h2>Please get in touch</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <div class="container-fluid">
                            <form id="contact" action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <input type="text" required autocomplete="off" class="form-control" name="customer_name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="email" required autocomplete="off" class="form-control" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" required autocomplete="off" class="form-control" name="phone" id="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" required class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn studio-btn mt-3"><img src="{{asset('assets/img/core-img/logo-icon.png')}}" alt=""> Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

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

    <script>
        // Variable to hold request
        var request;

        // Bind to the submit event of our form
        $("#contact").submit(function(event){

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            // Abort any pending request
            if (request) {
                request.abort();
            }
            // setup some local variables
            var $form = $(this);

            // Let's select and cache all the fields
            var $inputs = $form.find("input, button, textarea");

            // Serialize the data in the form
            var serializedData = $form.serialize();

            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            $inputs.prop("disabled", true);

            // Fire off the request to /form.php
            request = $.ajax({
                url: "/api/mails",
                type: "post",
                data: serializedData
            });
            $success = 
            '<h2>Your message has been sent!</h2>' +
            '<button id="back" onClick="window.location.reload()" class="btn studio-btn mt-3 col-4 text-center"><img src="{{asset('assets/img/core-img/logo-icon.png')}}" alt=""> Back</button>';
            $fail = 'Oops! Some errors have occured!';

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){
                $("#modal-content").html($success);
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
                $("#modal-content").html($fail);
            });

            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });

        });

        $("#back").click(function(){
            location.reload();
        });
    </script>

</body>

</html>