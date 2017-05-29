<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bolsa de treball</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<!-- Styles -->
	<style>
		html,
		body {
			background: -moz-linear-gradient(312deg, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
			/* ff3.6+ */
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(255, 0, 0, 1)), color-stop(100%, rgba(0, 0, 0, 1)));
			/* safari4+,chrome */
			background: -webkit-linear-gradient(312deg, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
			/* safari5.1+,chrome10+ */
			background: -o-linear-gradient(312deg, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
			/* opera 11.10+ */
			background: -ms-linear-gradient(312deg, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
			/* ie10+ */
			background: linear-gradient(138deg, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
			/* w3c */
			filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#FF0000', endColorstr='#000000', GradientType=0);
			/* ie6-9 */
			color: #fff;
			font-family: 'Raleway', sans-serif;
			font-weight: 100;
			height: 100vh;
			margin: 0;
		}
		
		.full-height {
			height: 100vh;
		}
		
		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}
		
		.position-ref {
			position: relative;
		}
		
		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}
		
		.content {
			text-align: center;
		}
		
		.title {
			font-size: 84px;
		}
		
		
		.m-b-md {
			margin-bottom: 30px;
		}
		
		.imgSal {
			width: 200px;
		}
		
		.btnS {
			-webkit-border-radius: 12;
			-moz-border-radius: 12;
			border-radius: 12px;
			font-family: 'Raleway', sans-serif;
			color: #ffffff;
			font-size: 20px;
			padding: 10px 20px 10px 20px;
			border: solid #FFF 2px;
			background-color: Transparent;
			text-decoration: none;
			text-transform: uppercase;
		}
	</style>
</head>

	
<body>
	<div class="flex-center position-ref full-height"> @if (Route::has('login'))
		<div class="top-right links"> {{--@if (Auth::check())--}} {{--<a href="{{ url('/home') }}">Home</a>--}} {{--@else--}} {{--<a href="{{ url('/login') }}">Login</a>--}} {{--<a href="{{ url('/register') }}">Register</a>--}} {{--@endif--}} </div> @endif
		<div class="content">
			<div class="title m-b-md"> BOLSA DE TREBALL
				<br/> SALESIANS DE SARRIA </div>
			<div class="links">
				<a type="button" class="btnS" href="{{ url('/empresa') }}">Empresa</a>
				<a type="button" class="btnS" href="{{ url('/alumne') }}">Alumno</a>
			</div>
		</div>
			<div><img class="imgSal" src="https://lh5.googleusercontent.com/-iCeZEk_z3NQ/AAAAAAAAAAI/AAAAAAAAAHo/hgTKYmgUn6I/photo.jpg"></div>

	</div>
</body>

</html>