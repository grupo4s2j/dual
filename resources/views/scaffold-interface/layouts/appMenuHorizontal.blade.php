<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    {{--{{url('dashboard')}}--}}
                    <a href="/alumne" class="navbar-brand"><b>Borsa de treball</b>DB</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        @yield('menu_options')
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        @include('scaffold-interface.layouts.navbar.messages')
                                <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        @include('scaffold-interface.layouts.navbar.notifications')
                                <!-- /.notifications-menu -->

                        <!-- Tasks Menu -->
                        @include('scaffold-interface.layouts.navbar.tasks')
                                <!-- /.tasks-menu -->

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="user-image"
                                     alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs  ">{{Auth::user()->name}}  </span>
                            </a>


                            {{--<ul class="dropdown-menu">--}}
                            {{--<!-- The user image in the menu -->--}}
                            {{--<li class="user-header">--}}
                            {{--<img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="img-circle"--}}
                            {{--alt="User Image">--}}

                            {{--<p>--}}
                            {{--{{Auth::user()->name}}--}}
                            {{--<small>Member since Nov. 2012</small>--}}
                            {{--</p>--}}
                            {{--</li>--}}
                            {{--<!-- Menu Footer-->--}}
                            {{--<li class="user-footer">--}}
                            {{--<div class="pull-left">--}}
                            {{--<a href="{{url('settings')}}" class="btn btn-default btn-flat">Profile</a>--}}
                            {{--</div>--}}
                            {{--<div class="pull-right">--}}
                            {{--<a href="{{url('logout')}}" class="btn btn-default btn-flat">Sign out</a>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="{{url('logout')}}" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-power-off" href="{{url('logout')}}"></i>
                            </a>

                        </li>

                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('topNavigation')
                            <!--<small>Example 2.0</small>-->
                </h1>
                <!-- RUTAS -->
                <!--<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li><a href="#">Layout</a></li>
                  <li class="active">Top Navigation</li>
                </ol>-->
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.0.1
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://www.salesianssarria.com">Dev Solutions</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- Compiled and minified JavaScript -->
<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
<script> var baseURL = "{{ URL::to('/') }}"</script>
<script src="{{URL::asset('js/AjaxisBootstrap.js') }}"></script>
<script src="{{URL::asset('js/scaffold-interface-js/customA.js') }}"></script>
<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
<script>
    // pusher log to console.
    Pusher.logToConsole = true;
    // here is pusher client side code.
    var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
        encrypted: true
    });
    var channel = pusher.subscribe('test-channel');
    channel.bind('test-event', function (data) {
        // display message coming from server on dashboard Notification Navbar List.
        $('.notification-label').addClass('label-warning');
        $('.notification-menu').append(
                '<li>\
                            <a href="#">\
                                        <i class="fa fa-users text-aqua"></i> ' + data.message + '\
						</a>\
			</li>'
        );
    });
</script>
<script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();

    });
</script>
@yield('scripts')
</body>
</html>
