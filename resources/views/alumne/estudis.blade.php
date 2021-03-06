<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estudios Reglados</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateEstudiReglat'
                  enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                    <div class="form-group">
                        <label for="descCentro">Nombre del Centro</label>
                        <input type="text" class="form-control" id="descCentro" name="descCentro"
                               placeholder="Nombre del Centro" required>
                    </div>
                    <div class="form-group">
                        <label for="añoObtencion">Año de Obtención</label>
                        <input type="text" class="form-control" id="añoObtencion" name="añoObtencion"
                               placeholder="Año de Obtención" required>
                    </div>
                    <div class="form-group">
                        <label for="notaExpediente">Nota Expediente</label>
                        <input type="text" class="form-control" id="notaExpediente" name="notaExpediente"
                               placeholder="Nota Expediente" required>
                    </div>
                    <div class="form-group">
                        <label for="idEstudio">Estudios</label>
                        <select  class="form-control"  id="idEstudio" name="idEstudio">
                            @foreach($estudi as $estud)
                                <option value={{$estud->id}}>{{$estud->descEstudio}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" style="color:white;">___</label>
                        <input type="text" class="form-control" id="" name=""
                               placeholder="" style="border:none; background-color: white;" readonly>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <table class='table'>
                <thead>
                <th>Estudios</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($estudisr as $estudisreglat)
                    <tr>
                        <td>{{$estudisreglat->descEstudio}}</td>
                        <td><a href="alumne/{{$estudisreglat->id}}/{{$estudisreglat->pivot->idAlumno }}/deleteEstudiReglat"
                               class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>


    </div>
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estudios NO Reglados</h3>
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
                                <option value={{$area->id}}>{{$area->descArea}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descCentro">Nombre del Centro</label>
                        <input type="text" class="form-control" id="descCentro" name="descCentro"
                               placeholder="Nombre del Centro" required>
                    </div>
                    <div class="form-group">
                        <label for="descEstudio">Estudio Realizado</label>
                        <input type="text" class="form-control" id="descEstudio" name="descEstudio"
                               placeholder="Estudio Realizado" required>
                    </div>
                    <div class="form-group">
                        <label for="añoObtencion">Año de Obtención</label>
                        <input type="text" class="form-control" id="añoObtencion" name="añoObtencion"
                               placeholder="Año de Obtención" required>
                    </div>
                    <div class="form-group">
                        <label for="horas">Horas</label>
                        <input type="text" class="form-control" id="horas" name="horas"
                               placeholder="Horas" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            <table class='table'>
                <thead>
                <th>Centro de Estudio</th>
                <th>Estudio Realizado</th>
                <th>Horas</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($estudisn as $estudisnoreglat)
                    <tr>
                        <td>{{$estudisnoreglat->descCentro}}</td>
                        <td>{{$estudisnoreglat->descEstudio}}</td>
                        <td>{{$estudisnoreglat->horas}}</td>
                        <td><a href="alumne/{{$estudisnoreglat->id}}/deleteEstudiNoReglat"
                               class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>