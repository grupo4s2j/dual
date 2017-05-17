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
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empresa->ofertes as $oferta)
                        <tr>
                            <td>{{$oferta->descOfertaBreve}}</td>
                            <td>{{$oferta->dataEntrada}}</td>
                            <td>
                                <a href="{{ url('empresa/oferta/'. $oferta->id . '/' . $empresa->id)}}"
                                   class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                                <a href="{{ url('empresa/'. $oferta->id . '/' . $empresa->id)}}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- GRID OFERTAS -->