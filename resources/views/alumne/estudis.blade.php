<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estudis Reglats</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Desc Centre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Any Obtencio</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nota Expedient</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Estudi ->>> DROPDOWN</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="placeholder text">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <table class='table'>
                <thead>
                <th>Codi</th>
                <th>Action</th>
                </thead>
                <tbody>

                <tr>
                    <td>aaaa</td>
                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                     aria-hidden="true"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>


    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estudis NO Reglats</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateEstudiNoReglat'
                  enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                    <div class="form-group">
                        <label for="idArea">Area</label>

                        <select  class="form-control"  id="idArea" name="idArea">
                            @foreach($areas as $area)
                                <option value={{$area->id}}>{{$area->codiArea}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="form-group">
                        <label for="descCentro">Desc Centre</label>
                        <input type="text" class="form-control" id="descCentro" name="descCentro"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="descEstudio">Desc Estudi</label>
                        <input type="text" class="form-control" id="descEstudio" name="descEstudio"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="añoObtencion">Any Obtencio</label>
                        <input type="text" class="form-control" id="añoObtencion" name="añoObtencion"
                               placeholder="placeholder text">
                    </div>
                    <div class="form-group">
                        <label for="horas">Horas</label>
                        <input type="text" class="form-control" id="horas" name="horas"
                               placeholder="placeholder text">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <table class='table'>
                <thead>
                <th>Codi</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($estudisnoreglats as $estudisnoreglat)
                    <tr>

                        <td>{{$estudisnoreglat->id}}</td>
                        <td><a href="alumne/{{$estudisnoreglat->id}}/deleteEstudiNoReglat"
                               class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>