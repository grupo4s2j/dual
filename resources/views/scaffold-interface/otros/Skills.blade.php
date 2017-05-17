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
            Llistat Habilidades
        </h1>
        <?php if (isset($error)) {
            echo $error;
        }; ?>

        <div class="tab-pane active" id="tab_1">

            <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#myModal">Crear habilidad
            </button>
            <br>
            <table id="example1" class="table table-striped table-bordered table-hover"
                   aria-describedby="example1_info" role="grid" style='background:#fff'>
                <thead style="background-color:#ffccbc ">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 86px;" aria-sort="ascending">Nombre
                    </th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                        actions
                    </th>
                </tr>

                </thead>
                <tbody>
                @foreach($objects as $object)
                    <tr role="row" class="odd">

                        <td>{!!$object->skill    !!}</td>

                        {{--<td>{!!$alumn->activo!!}</td>--}}
                        <td>
                            <a onclick="Delete({!!$object->id!!} )" class='delete btn btn-danger btn-xs'>
                                <i class='material-icons'>Eliminar</i>
                            </a>
                            <script>
                                function Delete(id) {
                                    if (confirm('Estas seguro?')) {
                                        parent.location = '/admin/otros/skills/delete/' + id;
                                    }
                                }
                            </script>

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

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <form class='col s3' method='get' action='{{url('admin/otros/skills')}}/create'>
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Añadir skill</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="skill">Skill</label>
                                <input id="skill" name="skill" type="text" class="form-control"  required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            <button class='btn btn-primary pull-left' type='submit'>Crear habilidad</button>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </section>
@endsection


