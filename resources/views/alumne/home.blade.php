 <div class="content-wrapper" style="min-height: 901px;">
    <!-- Content Header (Page header) -->
    <section class="content-header" style=" padding:0px">
        {{--<h1>--}}
        {{--User--}}
        {{--</h1>--}}

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                             src="https://lh5.googleusercontent.com/-iCeZEk_z3NQ/AAAAAAAAAAI/AAAAAAAAAHo/hgTKYmgUn6I/photo.jpg"
                             alt="User profile picture">

                        <h3 class="profile-username text-center" value="">{!!$alumne->nombre!!}</h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Ofertas</b> <a class="pull-right">{{count($ofertas)}}</a>
                            </li>
                            <li class="list-group-item">
                                @if($alumne->consentimientoDatos == 1)
                                     <b>Estado</b> <a class="pull-right"> Activo</a>
                                @else 
                                    <b>Estado</b> <a class="pull-right"> Desactivado</a>
                                @endif
                            </li>
                        </ul>
                         <a href="{!! url("alumne")!!}/{!!$alumne->id!!}/activaCV"  class="btn btn-info btn-block"><b>Estado</b></a>
                        <a id="pdfview" class="btn btn-primary btn-block  "><b>Crear CV</b></a>
                        <a class="btn btn-warning btn-block "  onclick="showModalPW()"><b>Cambiar Contraseña</b></a>
                                                <!--Modal-->
                        <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button style="width: 3%;" type="button" class="close" data-dismiss="modal">&times;</button>
                              <h2 style="margin-top: 15px" id="fecha"></h2>       
                            </div>
                            <div class="modal-body" id="modelParent" style="padding:20px 50px;">
                                <div class="modal-body" id="modelParent" style="padding:20px 50px;">
                                   
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif             
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                             {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
              
                       
                            </div>
                            </div>
                            <div class="modal-footer">
                            </div>             


                          </div>
                          
                        </div>
                      </div> 
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary " style="margin-top: 20px">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Educacion Reglada</strong>

                        <p class="text-muted">
                        @foreach($estudisreglats as $reglat)
                            -{{$reglat->estudi->descEstudio}},  {{$reglat->descCentro}}  {{$reglat->añoObtencion}}.
                            <br>

                        @endforeach
                        </p>
                         <strong><i class="fa fa-book margin-r-5"></i> Educacion No Reglada</strong>

                        <p class="text-muted">
                        @foreach($estudisnoreglats as $noreglat)
                            -{{$noreglat->descEstudio}}
                            <br>
                        @endforeach 
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                       <p class="text-muted">{{$alumne->poblacion->poblacio}},  {{$alumne->provincy->provincia}}</p>
                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i>Aptitudes</strong>

                        <p>
                          @php 
                              $clases = array("label label-danger", "label label-success", "label label-info", "label label-warning", "label label-primary"); 
                              $i=0; 
                          @endphp 
                            @foreach($alumne->skill as $sk) 
                                @if($i==5) 
                                   @php  
                                         $i=0 
                                    @endphp 
                                @endif 
                                    <span class ="{{$clases[$i]}}">{{$sk->skill}}</span>         
                                @php 
                                    $i++ 
                                @endphp                     
                            @endforeach 
                        </p>

                        <hr>

							
						
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Perfil</a></li>
                        <li class=""><a href="#estudis" data-toggle="tab" aria-expanded="false">Estudis</a></li>
                        <li class=""><a href="#aptitudes" data-toggle="tab" aria-expanded="false">Aptitudes</a></li>

                        <li class=""><a href="#experiencia" data-toggle="tab" aria-expanded="false">Experiencia</a></li>
                        {{--<li class=""><a href="#ucalumne" data-toggle="tab" aria-expanded="false">UcAlumne</a></li>--}}
                        <li class=""><a href="#vehicle" data-toggle="tab" aria-expanded="false">Vehicle</a></li>
                        <li class=""><a href="#idiomes" data-toggle="tab" aria-expanded="false">Idiomes</a></li>
                        <li class=""><a href="#ofertas" data-toggle="tab" aria-expanded="false">Ofertas de Trabajo</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings">
                            @include('alumne.perfil')
                        </div>
                        <div class="tab-pane" id="estudis">
                            @include('alumne.estudis')
                        </div>
                        <div class="tab-pane" id="experiencia">
                            @include('alumne.experiencia')
                        </div>
                        {{--<div class="tab-pane" id="ucalumne">--}}
                        {{--@include('alumne.ucAlumne')--}}
                        {{--</div>--}}
                        <div class="tab-pane" id="vehicle">
                            @include('alumne.vehicle')
                        </div>
                        <div class="tab-pane" id="aptitudes">
                            @include('alumne.aptitudes')
                        </div>
                        <div class="tab-pane" id="idiomes">
                            @include('alumne.idiomes')
                        </div>
                        <div class="tab-pane" id="ofertas">
                            @include('alumne.ofertas')
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script src="https://code.jquery.com/jquery-git.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript">
	$('#pdfview').click(function () {


		var doc = new jsPDF();
		var imgData = 'data:image/jpeg;base64,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rpco7hWULZauPV1ZVcqKmquably3ntZIc7AoSS0EqkppKTbS0+XgflPBFUQPgmYj43tVrmruVF3oeXZ8M2ixSSPt1GlO6RMn5PcuaelVPYXPmU+kQYWojUmouCbSeq7GeReMOWu/thS5UiVCQ5rGjnKmrnlnuVORD0KWnjpKZlPCxGRRtRrGpxIh+yhEROLIYWch1JOKi28LRdhwqJsPEp8J2Sju63SCgbHWK5zlla9ybXb9meW3NeI904X0BpPURqSgmotrOuO06N0tVFeKJaOvgSeByoqsVVRFVN24Wy1UdooWUVDAkEDFVWsRVXLNc13853ss9vGMvWMLORzk93cy93XHZnwPEtmFbJZqt9XQULIah6K10ms5yqirmu9VPbUZekbgklwQnOVR7022/nxOeLceHU4VslXdm3SegYtc1zXpNrORUVu5di5bMkPcPld/EMJ6iM5QeYtrwPtNwABEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//9kgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA='
			doc.addImage(imgData, 'JPEG', 160, 14, 32, 32)
		
			doc.setDrawColor(220, 0, 27) 
			doc.setLineWidth(0.5)
			doc.line(0, 5, 300, 5) // horizontal line
			doc.setLineWidth(0.5)
			doc.line(205, 0, 205, 405)

			doc.setFontSize(16);
			doc.setTextColor(220, 0, 27)
			doc.setFontType("bolditalic");
			doc.text(14, 20, 'DATOS PERSONALES')
			doc.setFontType("normal");
			doc.setFontSize(12);
			
			doc.setTextColor(0,0,0)
			doc.text(14, 30, '{!!$alumne->nombre!!} {!!$alumne->apellido1!!} {!!$alumne->apellido2!!}')
			doc.text(14, 40, '{!!$alumne->email!!}')
			doc.text(14, 50, '{!!$alumne->telf1!!} / {!!$alumne->telf2!!}')
			doc.text(14, 60, '{!!$alumne->direccion!!}, {{$alumne->poblacion->poblacio}}, {{$alumne->provincy->provincia}}, {!!$alumne->CP!!}')
		
			
			$x = 90;
			$y = 140;
			$z = 190;
			$o = 230;
			
			doc.setFontSize(16);
			doc.setTextColor(220, 0, 27)
			doc.setFontType("bolditalic");
			doc.text(14, 80, 'ESTUDIOS ACADEMICOS REALIZADOS')
			doc.setFontType("normal");
			doc.setTextColor(0,0,0)
		
			doc.setFontSize(12);
			 @foreach($estudisreglats as $reglat)				
					doc.text(14, $x, '{{$reglat->añoObtencion}} - {{$reglat->estudi->descEstudio}},  {{$reglat->descCentro}}')
				$x = $x + 10;
			@endforeach
			doc.setFontSize(16);
			doc.setTextColor(220, 0, 27)
			doc.setFontType("bolditalic");
			doc.text(14, 130, 'ESTUDIOS NO ACADEMICOS REALIZADOS')
			doc.setFontType("normal");
			doc.setTextColor(0,0,0)

			doc.setFontSize(12);
			 @foreach($estudisnoreglats as $noreglat)
			 	doc.text(14, $y, '{{$noreglat->descEstudio}}, {{$noreglat->descCentro}}')
				$y = $y + 10;
			 @endforeach
			
			doc.setFontSize(16);
			doc.setTextColor(220, 0, 27)
			doc.setFontType("bolditalic");
			doc.text(14, 180, 'EXPERIENCIA LABORAL')
			doc.setFontType("normal");
			doc.setFontSize(12);
			doc.setTextColor(0,0,0)

			 @foreach($exp as $expLb)
			doc.text(14, $z, '{{$expLb->dataInicio->format('Y')}} - {{$expLb->dataFinal->format('Y')}} {{$expLb->descEmpresa}}')
			$z = $z + 10;
			 @endforeach
			
		    doc.setFontSize(16);
			doc.setTextColor(220, 0, 27)
			doc.setFontType("bolditalic");
			doc.text(14, 220, 'IDIOMAS')
			doc.setFontType("normal");
			doc.setFontSize(12);
			doc.setTextColor(0,0,0)

			@foreach($alumneIdi as $s)
				doc.text(14, $o, '{{$s->descIdioma}}, {{$s->pivot->nivelGenerico}}')
			$o = $o + 10;
			 @endforeach
			
			 /*doc.text(14, 240, 'OTROS DATOS DE INTERES')
		  	@foreach($tVehicle as $tv)
			doc.text(14, $o, '{{$tv->descTipoVehiculo}}')
				$o = $o + 10;
          	@endforeach*/
			doc.save('mi_cv.pdf');
	});
    
     function enviarCVempresa(idOferta){
            var doc = new jsPDF();
            //doc.addImage(imgData, 'JPEG', 160, 20, 32, 26)

            doc.setFontSize(16);
            doc.setFontType("bolditalic");
            doc.text(14, 20, 'DATOS PERSONALES')
            doc.setFontType("normal");
            doc.setFontSize(12);
            doc.text(14, 30, '{!!$alumne->nombre!!} {!!$alumne->apellido1!!} {!!$alumne->apellido2!!}')
            doc.text(14, 40, '{!!$alumne->email!!}')
            doc.text(14, 50, '{!!$alumne->telf1!!} / {!!$alumne->telf2!!}')
            doc.text(14, 60, '{!!$alumne->direccion!!}, {{$alumne->poblacion->poblacio}}, {{$alumne->provincy->provincia}}, {!!$alumne->CP!!}')
        
            
            $x = 90;
            $y = 140;
            $z = 190;
            $o = 230;
            
            doc.setFontSize(16);
            doc.setFontType("bolditalic");
            doc.text(14, 80, 'ESTUDIOS ACADEMICOS REALIZADOS')
            doc.setFontType("normal");

            doc.setFontSize(12);
             @foreach($estudisreglats as $reglat)               
                    doc.text(14, $x, '{{$reglat->añoObtencion}} - {{$reglat->estudi->descEstudio}},  {{$reglat->descCentro}}')
                $x = $x + 10;
            @endforeach
            doc.setFontSize(16);
            doc.setFontType("bolditalic");
            doc.text(14, 130, 'ESTUDIOS NO ACADEMICOS REALIZADOS')
            doc.setFontType("normal");

            doc.setFontSize(12);
             @foreach($estudisnoreglats as $noreglat)
                doc.text(14, $y, '{{$noreglat->descEstudio}}, {{$noreglat->descCentro}}')
                $y = $y + 10;
             @endforeach
            
            doc.setFontSize(16);
            doc.setFontType("bolditalic");
            doc.text(14, 180, 'EXPERIENCIA LABORAL')
            doc.setFontType("normal");
            doc.setFontSize(12);
             @foreach($exp as $expLb)
            doc.text(14, $z, '{{$expLb->dataInicio->format('Y')}} - {{$expLb->dataFinal->format('Y')}} {{$expLb->descEmpresa}}')
            $z = $z + 10;
             @endforeach
            
            doc.setFontSize(16);
            doc.setFontType("bolditalic");
            doc.text(14, 220, 'IDIOMAS')
            doc.setFontType("normal");
            doc.setFontSize(12);
            @foreach($alumneIdi as $s)
                doc.text(14, $o, '{{$s->descIdioma}}, {{$s->pivot->nivelGenerico}}')
            $o = $o + 10;
             @endforeach
            
             /*doc.text(14, 240, 'OTROS DATOS DE INTERES')
            @foreach($tVehicle as $tv)
            doc.text(14, $o, '{{$tv->descTipoVehiculo}}')
                $o = $o + 10;
            @endforeach*/
            doc.save('mi_cv.pdf');

        }
</script>
<script type="text/javascript">
function showModalPW(){
    $("#myModal").modal();
}

function getPDVcv(){
   
}
</script>