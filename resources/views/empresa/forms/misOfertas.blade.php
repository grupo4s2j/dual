<!-- GRID OFERTAS -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Mi Empresa</h3>
    </div>
    <!-- /.box-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Título de la oferta</th>
                        <th>Fecha de Creación</th>
                        <th>Estado</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody id="tablaOfertas">
                    @foreach($empresa->ofertes as $oferta)
                    @if($oferta->activo == 1)
                        <tr>
                            <td>{{$oferta->descOfertaBreve}}</td>
                            <td>{{date('F d, Y', strtotime($oferta->created_at))}}</td>
                            <td>{{$oferta->estats->descEstado}}</td>
                            <td>
                                <button oferta='{{$oferta->id}}' empresa='{{$empresa->id}}' class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                                <a href="{{ url('empresa/'. $oferta->id . '/' . $empresa->id)}}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- GRID OFERTAS -->


<!-- Modal -->
<div id="modalEditOferta" class="modal fade" role="dialog">
    <form class='col s3' method='get' action='{{url('admin/otros/provincies')}}/create'>
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Añadir provincia</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <input id="provincia" name="provincia" type="text" class="form-control"  required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button class='btn btn-primary pull-left' type='submit'>Crear provincia</button>
                </div>
            </div>

        </div>
    </form>
</div>