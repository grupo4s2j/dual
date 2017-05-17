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
		<div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Sector empresarial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                    <label for="inputSectorEmpresarial" class="col-sm-3 control-label">Sector empresarial</label>
                    <div class="col-sm-9">
                        <select id="selectSkills" name="inputSectorEmpresarial" class="form-control">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->skill }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <!--<button type="reset" class="btn btn-default">Cancelar</button>-->
                <button id="addSkillOferta" type="button" class="btn btn-info pull-right">Añadir</button>
            </div>

            <table class='table'>
                <thead>
                    <th>Skills para la oferta</th>
                    <th>Action</th>
                </thead>
                <tbody id="ofertasSkills">

                </tbody>
            </table>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-info pull-right">Crear Oferta</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- FORMULARIO OFERTAS -->