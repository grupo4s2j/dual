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
            Llistat Sectors
        </h1>
<?php if (isset($error)){
            echo $error;
        }; ?>

        <div class="tab-pane active" id="tab_1">
            <form class='col s3' method='get' action='{!!url("alumne")!!}/create'>
                <button class='btn btn-primary' type='submit'>Crear sector</button>
            </form>
            <br>
            <table id="example1" class="table table-striped table-bordered table-hover"
                   aria-describedby="example1_info" role="grid" style='background:#fff'>
                <thead style="background-color:#ffccbc ">
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                        colspan="1" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 86px;" aria-sort="ascending">Codigo
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending" style="width: 110px;">
                        Descripcion
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

                        <td>{!!$object->codiSector!!}</td>
                        <td>{!!$object->descSector!!}</td>

                        {{--<td>{!!$alumn->activo!!}</td>--}}
                        <td>
                            <a onclick="Delete({!!$object->id!!} )"  class='delete btn btn-danger btn-xs'>
                                <i class='material-icons'>Eliminar</i>
                            </a>
                            <script>
                                function Delete (id) {
                                    if (confirm('Estas seguro?')) {
                                        parent.location='/admin/otros/sector/delete/'+id;
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



    </section>
@endsection


