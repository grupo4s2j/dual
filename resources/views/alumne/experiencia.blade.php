
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Experiencia Laboral</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateExperiencia'>
                <div class="box-body">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="descEmpresa">Nombre de la Empresa</label>
                            <input type="text" class="form-control" id="descEmpresa" name="descEmpresa"
                                   placeholder="Nombre de la Empresa">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="idSector">Sector</label>
                            <select  class="form-control"  id="idSector" name="idSector">
                                @foreach($sector as $sectr)
                                    <option value={{$sectr->id}}>{{$sectr->descSector}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="dataFinal">Fecha Inicio</label>
                            <input type="text" class="form-control" id="dataFinal" name="dataFinal"
                                   placeholder="placeholder text">
                        </div>
                        <div class="col-xs-6">
                            <label for="mesesContrato">Fecha Final</label>
                            <input type="text" class="form-control" id="mesesContrato, " name="mesesContrato"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" id="categoria" name="categoria"
                                   placeholder="placeholder text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="Comentari">Comentario</label>
                                <textarea type="text" class="form-control" id="Comentari" placeholder="placeholder" name="Comentari" text></textarea>
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