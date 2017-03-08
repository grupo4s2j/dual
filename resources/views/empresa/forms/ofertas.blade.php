<!-- FORMULARIO OFERTAS -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Crear una Oferta</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="ofertas" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputCIF" class="col-sm-2 control-label">Título Oferta</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCIF" placeholder="Título de la Oferta">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDescOferta" class="col-sm-2 control-label">Descripción Oferta</label>
                <div class="col-sm-8">
                    @include('empresa.layout.editor')
                </div>
            </div>
            <div class="form-group">
                <label for="inputNombreComercial" class="col-sm-2 control-label">Nombre Comercial</label>
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
                <label for="inputCP" class="col-sm-2 control-label">CP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCP" placeholder="Código Postal">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSectorEmpresarial" class="col-sm-2 control-label">Sector Empresarial</label>
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
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- FORMULARIO OFERTAS -->