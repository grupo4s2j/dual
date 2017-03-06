@extends('scaffold-interface.layouts.app')
@section('title','Dashboard')
@section('content')
<section class="content-header">
	<h1>
	Dashboard
	<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>Ultimas Ofertas</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>Ultimas Ofertas</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>Ultimas Ofortas Modificadas</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-black">
				<div class="inner">
					<h3>MailBox</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-orange">
				<div class="inner">
					<h3>Vincular Oferta Demanda</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-purple">
				<div class="inner">
					<h3>Demanda Cerca Oferta</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div><div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>Oferta cerca Demanda</h3>
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="  search-query form-control" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
</section>
@endsection
