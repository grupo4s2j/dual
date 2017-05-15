<!-- FORMULARIO DATOS EMPRESA -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Mi Empresa</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="empresa" class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputCIF" class="col-sm-3 control-label">CIF</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputCIF" placeholder="CIF" value="{{$empresa->CIF}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNombreSocial" class="col-sm-3 control-label">Nombre Social</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputNombreSocial" placeholder="Nombre Social" value="{{$empresa->nombreSocial}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputNombreComercial" class="col-sm-3 control-label">Nombre Comercial</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputNombreComercial" placeholder="Nombre Comercial" value="{{$empresa->nombreComercial}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion" class="col-sm-3 control-label">Dirección</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputDireccion" placeholder="Dirección" value="{{$empresa->direccion}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPoblacion" class="col-sm-3 control-label">Población</label>
                <div name="inputPoblacion" class="col-sm-9">
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
                <label for="inputProvincia" class="col-sm-3 control-label">Provincia</label>
                <div name="inputProvincia" class="col-sm-9">
                    <select class="form-control">
                        @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputCP" class="col-sm-3 control-label" >CP</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputCP" placeholder="Código Postal" value="{{$empresa->CP}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSectorEmpresarial" class="col-sm-3 control-label">Sector Empresarial</label>
                <div class="col-sm-9">
                    <select name="inputSectorEmpresarial" class="form-control">
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
<!-- FORMULARIO DATOS EMPRESA -->