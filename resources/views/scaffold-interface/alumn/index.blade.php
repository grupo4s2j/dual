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
            Llistat alumnes
        </h1>


                <div class="tab-pane active" id="tab_1">
                    <form class='col s3' method='get' action='{!!url("alumne")!!}/create'>
                        <button class='btn btn-primary' type='submit'>Crear nou alumne</button>
                    </form>
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
