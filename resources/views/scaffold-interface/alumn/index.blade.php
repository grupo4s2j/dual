@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')
    <?php // number of rows per page
    $rowperpage = 5;
    if (isset($_POST['num_rows'])) {
        $rowperpage = $_POST['num_rows'];
    }?>
    <section class="content">
        <h1>
            Alumnos
        </h1>


                <div class="tab-pane active" id="tab_1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Crear Nuevo Usuario</h3>
                            <span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body" style="display: none">

                        <form role="form" method="POST" action="{{ url('recursos') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input type="text" class="form-control custom" name="titulo">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="control-label">Imagen de portada:</label>
                                                <input id="imgPortada" name="imgportada" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Categorias:</label>
                                            <div class="form-group">
                                                <select class="select2Categorias" multiple="multiple" id="select2" name="categorias[]" style="width: 100%;">

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tags:</label>
                                            <div class="form-group">
                                                <select class="select2Tags" multiple="multiple" name="tags[]" style="width: 100%;">

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Colaboradores:</label>
                                            <div class="form-group">
                                                <select class="select2Colaboradores" multiple="multiple" id="select2" name="colaboradores[]" style="width: 100%;">

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Fecha de publicación:</label>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="input-group date dateInicio" data-provide="datepicker">
                                                    <input id="dateInicio" name="datePublicacion" type="text" class="form-control">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="input-group clockpickerInicio">
                                                    <input type="text" name="horaPublicacion" class="form-control">
												    <span class="input-group-addon">
												        <span class="glyphicon glyphicon-time"></span>
												    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="mt15">Fecha de finalización:</label>
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="input-group date dateFinal" data-provide="datepicker">
                                                    <input id="dateFinal" name="dateFinalizacion" type="text" class="form-control">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="input-group clockpickerFinal">
                                                    <input type="text" name="horaFinalizacion" class="form-control">
												    <span class="input-group-addon">
												        <span class="glyphicon glyphicon-time"></span>
												    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row checkbox custom margin0">
                                                <div class="col-xs-3">
                                                    <label for="usr">Publicar:</label>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="checkbox" name="activa" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row checkbox custom margin0">
                                                <div class="col-xs-3">
                                                    <label>Anclar incio:</label>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="checkbox" name="inicio" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="danger">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row checkbox custom margin0">
                                                <div class="col-xs-3">
                                                    <label for="usr">Dirigido a:</label>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="checkbox" name="dirigido" data-toggle="toggle" data-on="Padres" data-off="Profesor" data-onstyle="success" data-offstyle="info">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 mt10">
                                <div class="form-group">
                                    <label>Descripción breve:</label>
                                    <textarea class="form-control custom" name="descripcion" rows="6"></textarea>

                                </div>
                            </div>
                            <div class="col-xs-12 mt10">
                                <textarea class="ckeditor" name="body" id="editor1" row="400" cols="80"></textarea><br>

                            </div>
                            <div class="col-xs-2 pull-right">
                                <input type="submit" class="btn btn-default custom green" value="Subir">
                            </div>
                        </div>
                    </form>
                            </div>
                        </div>
                    <br>
                    <table id="example1" class="table table-striped table-bordered table-hover"
                           aria-describedby="example1_info" role="grid" style='background:#fff'>
                        <thead style="background-color:#ffccbc ">
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Rendering engine: activate to sort column descending"
                                style="width: 86px;" aria-sort="ascending">Apellido 1
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending" style="width: 110px;">
                                Nombre
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                                Accions
                            </th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($alumnes as $alumno)
                            <tr role="row" class="odd">

                                <td>{!!$alumno->apellido1!!}</td>
                                <td>{!!$alumno->nombre!!}</td>
                                {{--<td>{!!$alumn->activo!!}</td>--}}
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class='delete btn btn-danger btn-xs' data-link="/admin/alumne/{!!$alumno->id!!}/deleteMsg">
                                        <i class='material-icons'>Eliminar</i>
                                    </a>
                                    <a href='{!!url('/admin/alumne/view/'.$alumno->id)!!}' class='viewShow btn btn-warning btn-xs'>
                                        <i class='material-icons'>Veure</i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--{!! $recursos->render() !!}--}}
                </div>

                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </section>
@endsection
