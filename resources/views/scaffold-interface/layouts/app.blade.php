<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
		
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

		<link href="{{URL::asset('/css/public.css') }}" rel="stylesheet">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				<!-- Logo -->
				<a href="{{url('admin/dashboard')}}" class="logo">
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>B</b>DB</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>Borsa de treball</b>DB</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Notification Navbar List-->

							<!-- END notification navbar list-->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="user-image" alt="User Image">
									<span class="hidden-xs">{{Auth::user()->name}}</span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="img-circle" alt="User Image">
										<p>
											{{Auth::user()->name}}
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-right">
											<a href="{{url('logout')}}" class="btn btn-default btn-flat"
												onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">Sign out</a>
											<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="{{url('admin/dashboard')}}">
								<i class="fa fa-home"></i> <span>Dashboard</span></i>
							</a>
						</li>
						<li class="active treeview">
							<a href="{{url('admin/alumne')}}">
								<i class="fa fa-user"></i> <span>Alumnes</span></i>
							</a>
						</li>
						<li class="active treeview">
							<a href="{{url('admin/empresa')}}">
								<i class="fa fa-building-o"></i> <span>Empresas</span></i>
							</a>
						</li>
						<li class="active treeview">
							<a href="{{url('admin/oferta')}}">
								<i class="fa fa-bookmark"></i> <span>Ofertas</span></i>
							</a>
						</li>
						<li class="active treeview">
							<a href="{{url('admin/otros')}}">
								<i class="fa fa-edit"></i> <span>Otros</span></i>
							</a>
						</li>
						<li class="header">ADMINISTRATOR</li>
						<li class="treeview"><a href="{{url('admin/mailbox')}}"><i class="fa fa-users"></i> <span>MailBox</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Ultimas Ofertas</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Ultimas Ofertas Modificadas</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Ultima Demanda</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Vincular Oferta Demanda</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Demanda cerca Oferta</span></a></li>
						<li class="treeview"><a href="{{url('/#')}}"><i class="fa fa-users"></i> <span>Oferta cerca Demanda</span></a></li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<div class="content-wrapper">
				@yield('content')
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class = 'AjaxisModal'>
			</div>
		</div>
		<!-- Compiled and minified JavaScript -->
		<script src="https://almsaeedstudio.com/themes/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
		<script> var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('js/AjaxisBootstrap.js') }}"></script>
		<script src = "{{URL::asset('js/scaffold-interface-js/customA.js') }}"></script>
		<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		
		<script src="{{asset('/js/admin.js')}}"></script>
		
		<script>
		// pusher log to console.
		Pusher.logToConsole = true;
		// here is pusher client side code.
		var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
		encrypted: true
		});
		var channel = pusher.subscribe('test-channel');
		channel.bind('test-event', function(data) {
		// display message coming from server on dashboard Notification Navbar List.
		$('.notification-label').addClass('label-warning');
		$('.notification-menu').append(
			'<li>\
						<a href="#">\
									<i class="fa fa-users text-aqua"></i> '+data.message+'\
						</a>\
			</li>'
			);
		});
		</script>
		<script src="{{URL::asset('js/admin-lte/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{URL::asset('js/admin-lte/datatables/dataTables.bootstrap.min.js') }}"></script>
		<script>
			$(function () {
				$("#example2").DataTable();

			});
			$(function () {
				$("#example1").DataTable();

			});
		</script>
	</body>
</html>
