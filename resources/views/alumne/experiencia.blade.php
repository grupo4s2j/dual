
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Experiencia Laboral</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateExperiencia'
                <div class="box-body">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="descEmpresa">Desc Empresa</label>
                            <input type="text" class="form-control" id="descEmpresa" name="descEmpresa"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="dataInicio">idSector -->> DROPDOWN</label>
                            <input type="text" class="form-control" id="dataInicio" name="dataInicio"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="dataFinal">Data Inici</label>
                            <input type="text" class="form-control" id="dataFinal" name="dataFinal"
                                   placeholder="placeholder text">
                        </div>
                        <div class="col-xs-6">
                            <label for="mesesContrato">Data final</label>
                            <input type="text" class="form-control" id="mesesContrato, " name="mesesContrato"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mesos Contracte</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="placeholder text" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Categoria</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Comentari</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                                              placeholder="placeholder text"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Añadir</button>
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
</div>