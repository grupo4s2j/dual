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
                             src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/user4-128x128.jpg"
                             alt="User profile picture">

                        <h3 class="profile-username text-center" value="">{!!$alumne->nombre!!}</h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Ofertas</b> <a class="pull-right">8</a>
                            </li>
                            <li class="list-group-item">
                                <b>Estado</b> <a class="pull-right">Activo</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-info btn-block"><b>Estado</b></a>
                        <a href="#" class="btn btn-primary btn-block  "><b>Crear CV</b></a>
                        <a href="#" class="btn btn-warning btn-block "><b>Cambiar Contraseña</b></a>
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
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i>Aptitudes</strong>

                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
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
                        <li class=""><a href="#altres" data-toggle="tab" aria-expanded="false">Altres</a></li>

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
                        <div class="tab-pane" id="altres">
                            @include('alumne.altres')
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