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
			doc.text(20, 20, 'DATOS PERSONALES')
			doc.text(18, 30, 'Nombre: {!!$alumne->nombre!!}')
			doc.text(18, 40, 'Apellido: {!!$alumne->apellido1!!} {!!$alumne->apellido2!!}')
			doc.text(18, 50, 'Dirección: {!!$alumne->direccion!!}')
			doc.text(18, 60, 'Correo electrónico: {!!$alumne->email!!}')
			doc.text(18, 70, 'Teléfono de contacto: {!!$alumne->telf1!!}/{!!$alumne->telf2!!}')
		
			doc.text(18, 90, 'ESTUDIOS REALIZADOS')
			doc.text(18, 70, 'Teléfono de contacto: {!!$alumne->telf1!!}/{!!$alumne->telf2!!}')
			doc.text(18, 70, 'Teléfono de contacto: {!!$alumne->telf1!!}/{!!$alumne->telf2!!}')
			doc.save('mi_cv.pdf');
	});
        
</script>
<script type="text/javascript">

function showModalPW(){
    $("#myModal").modal();
}

function getPDVcv(){
   
}


</script>