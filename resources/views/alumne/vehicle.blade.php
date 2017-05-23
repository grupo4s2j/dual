<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Vehicle</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateVehicleAlumne'
                  enctype="multipart/form-data" class="form-horizontal">
                <div class="box-body">
                    <form action="/" method="post">
                        {!! csrf_field() !!}
                        <input type='hidden' name='_token' value='{{Session::token()}}'>
                        <div class="col-xs-6">
                            <select  class="form-control"  id="idTipoVehiculo" name="idTipoVehiculo">
                                @foreach($tVehicle as $tv)
                                    <option value={{$tv->id}}>{{$tv->descTipoVehiculo}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class='btn btn-primary'>Add vehicle</button>
                        </div>
                    </form>
                    <table class='table'>
                        <thead>
                        <th>Tipo Vehiculo</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($Alvehicle as $tvh)
                            <tr>
                                <td>{{$tvh->descTipoVehiculo}}</td>
                                <td><a href="alumne/{{$tvh->id}}/deleteVehicleAlumne"
                                       class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                </div>
            </form>
        </div>

    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Carné de Conducir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateCarneAlumne' enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                    <form role ="form">
                        <div class="col-xs-6">
                            <select  class="form-control"  id="idTipusCarnet" name="idTipusCarnet">
                                @foreach($tCarne as $tc)
                                    <option value={{$tc->id}}>{{$tc->codiTipoCarne}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class='btn btn-primary'>Add Carné</button>
                        </div>
                    </form>
                    <table class='table'>
                        <thead>
                        <th>Codi Carné</th>
                        <th>Descripción Carné</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($Alcarne as $tc)
                            <tr>
                                <td>{{$tc->codiTipoCarne}}</td>
                                <td>{{$tc->descTipoCarne}}</td>
                                <td><a href="alumne/{{$tc->id}}/deleteCarneAlumne"
                                       class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
                </div>
            </form>
        </div>

    </div>
</div>