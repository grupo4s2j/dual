<!-- FORMULARIO OFERTAS -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Tus ofertas</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="ofertas" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputCIF" class="col-sm-2 control-label">Título de la oferta</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCIF" placeholder="Título de la Oferta">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDescOferta" class="col-sm-2 control-label">Descripción de la oferta</label>
                <div class="col-sm-8">
                    @include('empresa.layout.editor')
                </div>
            </div>
            <div class="form-group">
                <label for="inputNombreComercial" class="col-sm-2 control-label">Nombre comercial</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNombreComercial" placeholder="Nombre Comercial">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Población</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputProvincia" class="col-sm-2 control-label">Provincia</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputCP" class="col-sm-2 control-label">Código postal</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCP" placeholder="Código Postal">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSectorEmpresarial" class="col-sm-2 control-label">Sector empresarial</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>
			<div class="form-group">
                <label for="inputJornada" class="col-sm-2 control-label">Tipo de jornada</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>Media jornada</option>
                        <option>Jornada intensiva</option>
                        <option>Jornada completa</option>
                    </select>
                </div>
            </div>
			<div class="form-group">
                <label for="inputSueldo" class="col-sm-2 control-label">Salario establecido</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputSueldo" placeholder="Salario">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-info pull-right">Aceptar</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- FORMULARIO OFERTAS -->