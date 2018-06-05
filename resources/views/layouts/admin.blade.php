<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studio | Administrator</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('admin view asset/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('admin view asset/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('admin view asset/assets/scss/style.css')}}">
    <link href="{{asset('admin view asset/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
    <!-- Data table -->
    <link rel="stylesheet" href="{{asset('admin view asset/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/admin/dashboard"><img src="{{asset('admin view asset/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="/admin/dashboard"><img src="{{asset('admin view asset/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/admin/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Control Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="/admin/photos"> <i class="menu-icon ti-image"></i>Photos </a>
                    </li>
                    <li>
                        <a href="/admin/mails"> <i class="menu-icon ti-email"></i>Mails </a>
                    </li>
                    <h3 class="menu-title">Modules</h3><!-- /.menu-title -->
                    <li>
                        <a href="/admin/slides"> <i class="menu-icon ti-layout-slider"></i>Slideshow</a>
                    </li>
                    <li>
                        <a href="/"> <i class="menu-icon ti-home"></i>Homepage</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin view asset/images/avatar/1.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin view asset/images/avatar/2.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin view asset/images/avatar/3.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin view asset/images/avatar/4.jpg')}}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('admin view asset/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('breadcrumb')
        @yield('content')
        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('admin view asset/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('admin view asset/assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/main.js')}}"></script>



    <!-- Data table -->
    <script src="{{asset('admin view asset/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('admin view asset/assets/js/lib/data-table/datatables-init.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
    @yield('script')
</body>
</html>
