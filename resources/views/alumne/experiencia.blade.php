
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Experiencia Laboral</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateExperiencia' enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                       <div class="form-group">
                           <div class="col-xs-6">
                             <label for="descEmpresa">Nombre de la Empresa</label>
                                <input type="text" class="form-control" id="descEmpresa" name="descEmpresa"
                                   placeholder="Nombre de la Empresa">
                            </div>
                           <div class="col-xs-6">
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
                            <label for="dataInicio">Fecha Inicio</label>
                            <input type="text" class="form-control" id="dataInicio, " name="dataInicio"
                                   placeholder="Ingrese Fecha Inicio">
                        </div>
                        <div class="col-xs-6">
                            <label for="dataFinal">Fecha Final</label>
                            <input type="text" class="form-control" id="dataFinal" name="dataFinal"
                                   placeholder="Ingrese Fecha Final">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" id="categoria" name="categoria"
                                   placeholder="Categoria">
                        </div>
                    <div class="col-xs-6">
                            <label for="Comentari">Comentario</label>
                                <textarea type="text" class="form-control" id="Comentari" placeholder="Escriba un comentario" name="Comentari" text></textarea>
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
                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>