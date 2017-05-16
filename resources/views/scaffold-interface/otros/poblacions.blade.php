@extends('scaffold-interface.layouts.app')
@section('title','Poblacions')
@section('content')
    <?php // number of rows per page
    $rowperpage = 5;
    if (isset($_POST['num_rows'])) {
        $rowperpage = $_POST['num_rows'];
    }?>

    <section class="content">
        <h1>
            Llistat Poblacions
        </h1>
<?php if (isset($error)){
            echo $error;
        }; ?>

        <div class="tab-pane active" id="tab_1">
            <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#myModal">Crear poblacion
            </button>
            <br>

            <table id="example1" class="table table-striped table-bordered table-hover"
                   aria-describedby="example1_info" role="grid" style='background:#fff'>
                <thead style="background-color:#ffccbc ">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 86px;" aria-sort="ascending">Poblacion
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

                        <td>{!!$object->poblacio    !!}</td>
                        {{--<td>{!!$alumn->activo!!}</td>--}}
                        <td>
                            <a onclick="Delete({!!$object->id!!} )"  class='delete btn btn-danger btn-xs'>
                                <i class='material-icons'>Eliminar</i>
                            </a>
                            <script>
                                function Delete (id) {
                                    if (confirm('Estas seguro?')) {
                                        parent.location='/admin/otros/poblacions/delete/'+id;
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
            <form class='col s3' method='get' action='{{url('admin/otros/poblacions')}}/create'>
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Añadir poblacio</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="poblacio">Poblacio</label>
                                <input id="poblacio" name="poblacio" type="text" class="form-control"  required>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="poblacio">Poblacio</label>
                                <select name="idProvincia" id="idProvincia" class="form-control">
                                    @foreach($provincies as $ss)
                                        <option value="{{$ss->id}}">{{$ss->provincia}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            <button class='btn btn-primary pull-left' type='submit'>Crear poblacion</button>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </section>
@endsection


