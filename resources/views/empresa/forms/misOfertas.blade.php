<!-- GRID OFERTAS -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Mi Empresa</h3>
    </div>
    <!-- /.box-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Título de la oferta</th>
                        <th>Fecha de Creación</th>
                        <th>Estado</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody id="tablaOfertas">
                    @foreach($empresa->ofertes as $oferta)
                    @if($oferta->activo == 1)
                        <tr tagoferta="{{$oferta->id}}">
                            <td>{{$oferta->descOfertaBreve}}</td>
                            <td>{{date('F d, Y', strtotime($oferta->created_at))}}</td>
                            <td>{{$oferta->estats->descEstado}}</td>
                            <td>
                                <button oferta='{{$oferta->id}}' empresa='{{$empresa->id}}' class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                                <a class="btn btn-warning btn-sm" showModal="modalOferta">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<!-- GRID OFERTAS -->

<div class="modal fade" id="myModalOferta" role="dialog">
    <div class="modal-dialog" style="width: 650px;">
     <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #3c8dbc; text-align: center;">
                <button style="width: 3%;" type="button" class="close" data-dismiss="modal">&times;</button>
                 <b style="font-size: 18px; color: white;">Editar Oferta de Trabajo</b>       
            </div>
            <div class="modal-body" id="modelParent" style="padding: 20px 60px 20px 60px; overflow: scroll; height: 675px;">
                <div class="modal-body" id="modelParent2" style="padding:0px 0px;">
    

    <form id="ofertaEdit" class="form-horizontal">
        {{csrf_field()}}
        <input type="hidden" name="idEmpresa" value="{{$empresa->id}}">
        <input type="hidden" name="idOferta">
        <input type="hidden" name="nombreForm" value="ofertas">
        <div class="box-body">
            <div class="form-group">
                <label for="inputCIF" class="col-sm-2 control-label" >Título de la oferta</label>
                <div class="col-sm-10">
                    <input type="text" id="inputTitle" class="form-control" name="inputTitulo" placeholder="Título de la Oferta" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDescOferta" class="col-sm-2 control-label">Descripción de la oferta</label>
                <div class="col-sm-10">
                    {{--@include('empresa.layout.editor')--}}
                    <textarea id="inputDescription" rows="8" style="width:100%;resize:vertical;resize:none;" name="inputDescripcion" placeholder="Descripción de la oferta" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-10">
                    <input type="text" id="inputDireccion" class="form-control" id="inputDireccion" placeholder="Dirección" value="{{$empresa->direccion}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputProvincia" class="col-sm-2 control-label">Provincia</label>
                <div class="col-sm-10">
                    <select id="selectProvincia" name="inputProvincia" class="form-control">
                        @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id }}" {{ $provincia->id == $empresa->idProvincia ? 'selected' : '' }} >{{ $provincia->provincia }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPoblacion" class="col-sm-2 control-label">Población</label>
                <div class="col-sm-10">
                    <select name="inputPoblacion" class="form-control">
                        @foreach($poblaciones as $poblacion)
                            <option value="{{ $poblacion->id }}" {{ $poblacion->id == $empresa->idPoblacio ? 'selected' : '' }} > {{ $poblacion->poblacio }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputCP" class="col-sm-2 control-label">Código postal</label>
                <div class="col-sm-10">
                    <input id="CPnumber" type="number" name="inputCP" class="form-control"  placeholder="Código Postal" value="{{$empresa->CP}}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputSectorEmpresarial" class="col-sm-2 control-label" >Sector empresarial</label>
                <div class="col-sm-10">
                    <select id="selectSector" name="inputSectorEmpresarial" class="form-control">
                        @foreach($empresa->sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->codiSector }} - {{ $sector->descSector }}</option>
                        @endforeach
                    </select>
                </div>  
            </div>
            <div class="form-group">
                <label for="inputJornada" class="col-sm-2 control-label">Tipo de jornada</label>
                <div class="col-sm-10">
                    <select id="selectJornada" name="inputJornada" class="form-control">
                        <option value="4">Media jornada</option>
                        <option value="12">Jornada intensiva</option>
                        <option value="8">Jornada completa</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputExperiencia" class="col-sm-2 control-label">Experiencia Laboral</label>
                <div class="col-sm-10">
                    <input type="number" name="inputExperiencia" class="form-control" id="inputExp" placeholder="Experiencia Laboral (en meses)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputIdiomas" class="col-sm-2 control-label">Idiomas</label>
                <div class="col-sm-10">
                    @foreach($idiomas as $idioma)
                        <input type="checkbox" name="inputIdiomas[]" id="checkIdioma{{$idioma->id}}" value="{{ $idioma->id }}"> {{ $idioma->descIdioma }}<br>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.SKILLS VACANTE -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Aptitudes de la Vacante</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                    <label for="inputskills" class="col-sm-2 control-label">Aptitudes</label>
                    <div class="col-sm-10">
                       <select id="selectSkillsModal" class="form-control">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->skill }}</option>
                            @endforeach
                        </select>
                    </div>
               </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button id="addSkillOfertaModal" type="button" class="btn btn-info pull-right">Añadir</button>
            </div>

            <table class='table'>
                <thead>
                    <th>Aptitudes de la Vacante</th>
                    <th>Action</th>
                </thead>
                <tbody id="ofertasSkillsModal">

                </tbody>
            </table>
        </div>
        <!-- /.ESTUDIS VACANTE -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Estudios Obligatorios para la Vacante</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEstudisObligatoris" class="col-sm-2 control-label">Estudios Seleccionables</label>
                    <div class="col-sm-10">
                        <select id="selectEstudisObligatorisModal" class="form-control">
                            @foreach($estudis as $estudi)
                                <option value="{{ $estudi->id }}">{{ $estudi->codiEstudio }} - {{ $estudi->descEstudio }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button id="addEstudisObligatorisModal" type="button" class="btn btn-info pull-right">Añadir</button>
            </div>

            <table class='table'>
                <thead>
                    <th>Estudios para la Vacante</th>
                    <th>Action</th>
                </thead>
                <tbody id="ofertasEstudisModal">

                </tbody>
            </table>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" tagEdit="editOferta" class="btn btn-info pull-right">Editar Oferta</button>
        </div>
        <!-- /.box-footer -->
        </div>
    </form>

                </div>
            </div>
            <div class="modal-footer">
            </div>             
        </div>  

</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script type="text/javascript">
var ofertas = {!! json_encode($empresa->ofertes) !!}; //->toArray()
var idiomas = {!! json_encode($idiomas) !!}; 
var provincies
$('td a[showModal=modalOferta]').click(function() {
   
    var idofertasel = $(this).closest('tr').attr('tagoferta');
    var oferta;
    var valueJornada = "1";
   for (i = 0; i < ofertas.length; i++) { 
        if(ofertas[i].id == parseInt(idofertasel)){
            oferta = ofertas[i]
        }
    }
    $("form#ofertaEdit input[name=idOferta]").val(oferta.id);
    console.log(oferta);
    $("#inputTitle").val(oferta.descOfertaBreve);
    $("#inputDescription").val(oferta.descOferta);
    $("#inputDireccion").val(oferta.direccion);
    $("#selectProvincia").val(oferta.idProvincia.toString());
    $("#selectPoblacio").val(oferta.idPoblacio.toString());
    $("#CPnumber").val(oferta.CP); 
    $("#selectSector").val(oferta.idSector.toString());
    
    //jornada laboral
    if(oferta.jornadaLaboral == 8)
        valueJornada = "8";
    else if(oferta.jornadaLaboral > 8)
        valueJornada = "12";

     $("#selectJornada").val(valueJornada);
    //skills
     var skillstable = "";
     for(i = 0; i < oferta.skills.length; i++){
        skillstable += "<tr><td>"+ oferta.skills[i].skill +"</td><td><button type='button' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' ></i></button><input type='hidden' name='inputSkills[]' value='"+ oferta.skills[i].id+"'></td></tr>";
     }
     $("#ofertasSkillsModal").html(skillstable);
      //idiomes
     var checkIdioma;
     var idIdiomaCheck = 0;

    for(i = 0; i < idiomas.length; i++){
        checkIdioma = $("#checkIdioma"+idiomas[i].id);
        idIdiomaCheck = checkIdioma.val();
        for(j=0; j < oferta.idiomes.length; j++){
            if(idIdiomaCheck == oferta.idiomes[j].id)
                checkIdioma.prop("checked", true );
        }
     }
     //estudis
     var estudistable = "";
     for(i = 0; i < oferta.estudis.length; i++){
        estudistable += "<tr><td>"+ oferta.estudis[i].descEstudio +"</td><td><button type='button' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' ></i></button><input type='hidden' name='inputEstudis[]' value='"+ oferta.estudis[i].id+"'></td></tr>";
     }
     $("#ofertasEstudisModal").html(estudistable);
     
     $("#inputExp").val(oferta.mesesExperiencia.toString());
     //show modal
    $("#myModalOferta").modal();
});

$('form#ofertaEdit').submit(function(e) {
    e.preventDefault();

    var form = $(this).serialize();

    console.log(form);

    //alert('tupac');

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax({
        type:"POST",
        url: 'empresa/oferta/editar',
        data: form,
        dataType: 'json',
        success: function(response){
            console.log(response)
            $('#myModalOferta').modal('hide')
        },      
        error: function(jqXHR, textStatus, errorThrown){
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
});

  //FUNCION PARA AÑADIR ESTUDIOS A LAS OFERTAS
    $("#addEstudisObligatorisModal").click(function() {
        var nombre = $('#selectEstudisObligatorisModal').find(":selected").text();
        var valor = $('#selectEstudisObligatorisModal').find(":selected").val();
        $('#ofertasEstudisModal').append('<tr><td>'+ nombre +'</td><td><button type="button" estudi="'+nombre+'" value="'+valor+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button><input type="hidden" value="'+valor+'" name="inputEstudis[]"></td></tr>');
        

        $('#selectEstudisObligatorisModal').find(":selected").remove();
    });
    
    //FUNCION PARA ELIMINAR ESTUDIOS DE LAS OFERTAS
    $(document).on("click", "#ofertasEstudisModal button", function() {
        var nombre = $(this).closest('tr').find('button').attr('estudi');
        var valor = $(this).closest('tr').find('button').val();
        $(this).closest('tr').remove();
        
        $('#selectSkillsModal').append('<option value="'+valor+'">'+nombre+'</option>');
    });
    
    //FUNCION PARA AÑADIR SKILLS A LAS OFERTAS
    $("#addSkillOfertaModal").click(function() {
        var nombre = $('#selectSkillsModal').find(":selected").text();
        var valor = $('#selectSkillsModal').find(":selected").val();
        $('#ofertasSkillsModal').append('<tr><td>'+ nombre +'</td><td><button type="button" skill="'+nombre+'" value="'+valor+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button><input type="hidden" value="'+valor+'" name="inputSkills[]"></td></tr>');
        
        $('#selectSkillsModal').find(":selected").remove();
    });
    
    //FUNCION PARA ELIMINAR SKILLS DE LAS OFERTAS
    $(document).on("click", "#ofertasSkillsModal button", function() {
        var nombre = $(this).closest('tr').find('button').attr('skill');
        var valor = $(this).closest('tr').find('button').val();
        $(this).closest('tr').remove();
        
    });

</script>