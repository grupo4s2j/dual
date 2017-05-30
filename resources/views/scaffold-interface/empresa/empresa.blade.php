@extends('scaffold-interface.layouts.app')
@section('title','Empresa')
@section('content')
    <?php // number of rows per page
    $rowperpage = 5;
    if (isset($_POST['num_rows'])) {
        $rowperpage = $_POST['num_rows'];
    }?>

    <section class="content">
        <h1>
            Empresas
        </h1>

        <div class="tab-pane active" id="tab_1">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1" class="fa fa-chevron-down" style="font-size:18px">Crear un nueva empresa</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form method='POST' action='{!! url("admin/empresa")!!}/createEmpresa'>
                                        <input type='hidden' name='_token' value='{{Session::token()}}'>
                                        <div class="box-body">
                                            <div class="form-group">

                                                <div class="col-xs-6">
                                                    <label for="CIF">CIF</label>
                                                    <input type="text" class="form-control" id="CIF" name="CIF"
                                                           placeholder="CIF">
                                                </div>
                                                <div class="col-xs-6" style="visibility: hidden;" >
                                                    <label for="" style="color:white;">___</label>
                                                    <input type="text" class="form-control" id="rol" name="rol" value="2"
                                                           placeholder="" style="color:white; border:none; background-color: white;" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="nombreComercial">Nombre Comercial</label>
                                                    <input type="text" class="form-control" id="nombreComercial" name="nombreComercial"
                                                           placeholder="Nombre Comercial">
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="nombreSocial">Nombre Social</label>
                                                    <input type="text" class="form-control" id="nombreSocial" name="nombreSocial"
                                                           placeholder="Nombre Social">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="personaContacto">Persona de Contacto</label>
                                                    <input type="text" class="form-control" id="personaContacto" name="personaContacto"
                                                           placeholder="Persona Contacto">
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="telf">Telefono</label>
                                                    <input type="number" class="form-control" id="telf" name="telf"
                                                           placeholder="Telefono">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="email">Correo Electronico</label>
                                                    <input type="email" class="form-control" id="email, " name="email"
                                                           placeholder="Correo Electronico">
                                                </div>
                                                <div class="col-xs-6" style="visibility: hidden;" >
                                                    <label for="" style="color:white;">___</label>
                                                    <input type="text" class="form-control" id="" name="" value=""
                                                           placeholder="" style="color:white; border:none; background-color: white;" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="direccion">Direccion</label>
                                                    <input type="text" class="form-control" id="direccion" name="direccion"
                                                           placeholder="Direccion">
                                                </div>
                                                <div class="col-xs-6" style="visibility: hidden;" >
                                                    <label for="" style="color:white;">___</label>
                                                    <input type="text" class="form-control" id="" name="" value=""
                                                           placeholder="" style="color:white; border:none; background-color: white;" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-6">
                                                    <label for="idProvincia" >Provincia</label>
                                                    <select id="idProvincia" name="idProvincia" class="form-control">
                                                        @foreach($provincias as $provincia)
                                                            <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="idPoblacio" >Población</label>
                                                    <select id="idPoblacio" name="idPoblacio" class="form-control">
                                                        @foreach($poblaciones as $poblacion)
                                                            <option value="{{ $poblacion->id }}"> {{ $poblacion->poblacio }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Añadir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <br>
            <table id="example1" class="table table-striped table-bordered table-hover"
                   aria-describedby="example1_info" role="grid" style='background:#fff'>
                <thead style="background-color:#ffccbc ">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 86px;" aria-sort="ascending">Nombre Social
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending" style="width: 110px;">
                        Nombre Comercial
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                        Correo Electronico
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                        Actions
                    </th>
                </tr>

                </thead>
                <tbody>
                @foreach($empresas as $empresa)
                    <tr role="row" class="odd">

                        <td>{!!$empresa->nombreSocial!!}</td>
                        <td>{!!$empresa->nombreComercial!!}</td>
                        <td>{!!$empresa->email!!}</td>
                        {{--<td>{!!$alumn->activo!!}</td>--}}
                        <td>
                            <a data-toggle="modal" data-target="#myModal" class='delete btn btn-danger btn-xs' data-link="/admin/empresa/{!!$empresa->id!!}/deleteMsg">
                                <i class='material-icons'>Eliminar</i>
                            </a>
                            <a href='{!!url('/admin/empresa/view/'.$empresa->id)!!}' class='viewShow btn btn-warning btn-xs'>
                                <i class='material-icons'>Veure</i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </section>
@endsection
