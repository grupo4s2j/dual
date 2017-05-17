<!-- FORMULARIO OFERTAS -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">¿Quieres crear una oferta? ¡Adelante!</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="ofertas" class="form-horizontal" method="post" action="{{ url('empresa/update') }}">
        {{csrf_field()}}
        <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">
        <input type="hidden" name="nombreForm" value="ofertas">
        <div class="box-body">
            <div class="form-group">
                <label for="inputCIF" class="col-sm-2 control-label" >Título de la oferta</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputTitulo" placeholder="Título de la Oferta">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDescOferta" class="col-sm-2 control-label">Descripción de la oferta</label>
                <div class="col-sm-8">
                    {{--@include('empresa.layout.editor')--}}
                    <textarea rows="8" style="width:100%;resize:vertical;resize:none;" name="inputDescripcion" placeholder="Descripción de la oferta" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNombreComercial" class="col-sm-2 control-label">Nombre comercial</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputNombreComercial" placeholder="Nombre Comercial" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-group">
                <label for="inputProvincia" class="col-sm-2 control-label">Provincia</label>
                <div class="col-sm-8">
                    <select name="inputProvincia" class="form-control">
                        @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPoblacion" class="col-sm-2 control-label">Población</label>
                <div class="col-sm-8">
                    <select name="inputPoblacion" class="form-control">
                        @foreach($poblaciones as $poblacion)
                            <option value="{{ $poblacion->id }}">{{ $poblacion->poblacio }}</option>
                        @endforeach
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
                    <select name="inputSectorEmpresarial" class="form-control">
                        @foreach($sectores as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->codiSector }} - {{ $sector->descSector }}</option>
                        @endforeach
                    </select>
                </div>  

            </div>
			<div class="form-group">
                <label for="inputJornada" class="col-sm-2 control-label">Tipo de jornada</label>
                <div class="col-sm-8">
                    <select name="inputJornada" class="form-control">
                        <option value="1">Media jornada</option>
                        <option value="2">Jornada intensiva</option>
                        <option value="3">Jornada completa</option>
                    </select>
                </div>
            </div>
			<div class="form-group">
                <label for="inputIdiomas" class="col-sm-2 control-label">Idiomas</label>
                <div class="col-sm-8">
                    @foreach($idiomas as $idioma)
                        <input type="checkbox" name="idioma" value="{{ $idioma->id }}"> {{ $idioma->descIdioma }}<br>
                    @endforeach
                </div>
            </div>
			
			<tr><td></td></tr>
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
            <button type="submit" class="btn btn-info pull-right">Crear Oferta</button>
        </div>
        <!-- /.box-footer -->
		<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Sector empresarial</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="sectorempresa" class="form-horizontal" method="post" action="{{ url('empresa/update') }}">
        {{csrf_field()}}
        <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">
        <input type="hidden" name="nombreForm" value="sectorempresa">
        <div class="box-body">
            <div class="form-group">
                <label for="inputSectorEmpresarial" class="col-sm-3 control-label">Sector empresarial</label>
                <div class="col-sm-9">
                    <select name="inputSectorEmpresarial" class="form-control">
                        @foreach($sectores as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->codiSector }} - {{ $sector->descSector }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <!--<button type="reset" class="btn btn-default">Cancelar</button>-->
            <button type="submit" class="btn btn-info pull-right">Añadir</button>
        </div>
        <!-- /.box-footer -->
    </form>
    
    <table class='table'>
        <thead>
            <th>Skills para la oferta</th>
            <th>Action</th>
        </thead>
        <tbody id="ofertasSkills">
        @foreach($empresa->sectors as $sector)
            <tr>
                <td>{{$sector->codiSector}} - {{$sector->descSector}}</td>
                <td>
                    <a href="{{ url('empresa/'. $sector->id . '/' . $empresa->id)}}"
                       class="btn btn-danger btn-sm">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    </form>
</div>
<!-- FORMULARIO OFERTAS -->