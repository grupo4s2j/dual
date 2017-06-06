<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ofertas de Trabajo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="col-xs-6">

                    </div>
                </div>
            </form>
            <table id="ofertasTable" class='table'>
                <thead>
                     <th>Descripcion</th>
                     <th>Empresa</th>
                     <th>Població</th>
                     <th>Fecha Inicio</th>
                     <th>Ver Oferta</th>
                     <th id="title-state">Enviar CV</th>
                </thead>
                <tbody>
                @foreach($ofertas as $oferta)
                    <tr etiqueta="{{$oferta->id}}">
                        <td>{{$oferta->descOfertaBreve}}</td>
                        <td>{{$oferta->empreses->nombreSocial}}</td>
                        <td>{{$oferta->poblacio->poblacio}}</td>
                        <td>{{date('d-m-Y', strtotime($oferta->dataEntrada))}}</td>
                        <td><a marsal="caca">Ver oferta</td>
                        @php
                            $apuntat = null;
                        @endphp
                        @foreach($oferta->ofertaalumnes as $oa) 
                            
                             @if ($alumne->id == $oa->idAlumno) 
                                @php
                                    $apuntat = $oa->apuntat;
                                @endphp
                                @break;
                             @endif
                        @endforeach    
                      
                        @if($apuntat == 1)

                            <td><button id="desactivarOferta{{$oferta->id}}" style = "width: 77px;" class="btn-danger" name="desactivar" disabled>Enviado</button></td>
                        @endif
                        @if($apuntat == 0)
                            <td><button id="activarOferta{{$oferta->id}}" onclick="enviarCVempresa({{$oferta->id}})" style = "width: 77px;" class="btn-success" name="activar" >Enviar</button></td>
                        @endif
                    </tr>
                 @endforeach
                 </tbody>
            </table>
            <div class="modal fade" id="myModalOferta" role="dialog">
                <div class="modal-dialog" style="width: 650px;">
                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #3c8dbc; text-align: center;">
                            <button style="width: 3%;" type="button" class="close" data-dismiss="modal">&times;</button>
                            <b style="font-size: 18px; color: white;">Oferta de Trabajo</b>       
                        </div>
                        <div class="modal-body" id="modelParent" style="padding:20px 60px;">
                            <div class="modal-body" id="modelParent2" style="padding:0px 50px;">
                                   
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>             
                    </div>  
                </div>
            </div> 
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script type="text/javascript">
function showOferta(){
    $("#myModalOferta").modal();
}

$('td a[marsal=caca]').click(function() {
    var idofertasel = $(this).closest('tr').attr('etiqueta');
    var data = {idoferta : idofertasel};

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
            type:"POST",
            url: 'alumne/ofertainfo',
            data: data,
            dataType: 'json',
            success: function(response){
                $("#modelParent2").html(response);
                $("#myModalOferta").modal();
                
                },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
});

$(document).on('click', 'td button[name=activar]', function() {
    var idAlumno = {{$alumne->id}};
    var idOferta = parseInt($(this).closest('tr').attr('etiqueta'));

//var data = {idoferta : idOferta, idAlumno: idAlumno};
        var data = {idoferta : idOferta, idalumno: idAlumno};
        var btnActivar =  document.getElementById("activarOferta"+idOferta);
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
            type:"POST",
            url: 'alumne/apuntar',
            data: data,
            dataType: 'json',
            success: function(response){
               btnActivar.className = "btn-danger";  
               btnActivar.innerHTML = "Enviado";  
               btnActivar.id = "desactivarOferta" + idOferta;
               //btnActivar.setAttribute("name","desactivar");

            //document.getElementById("activarOferta"+idOferta).focus();
            },      
            error: function(jqXHR, textStatus, errorThrown){
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
});


/*$(document).on('click', 'td button[name=desactivar]', function() {
    var idAlumno = {{$alumne->id}};
    var idOferta = parseInt($(this).closest('tr').attr('etiqueta'));

//var data = {idoferta : idOferta, idAlumno: idAlumno};
        var data = {idoferta : idOferta, idalumno: idAlumno};
        var btnDesactivar = document.getElementById("desactivarOferta"+idOferta);

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
            type:"POST",
            url: 'alumne/desapuntar',
            data: data,
            dataType: 'json',
            success: function(response){
                btnDesactivar.className = "btn-success";  
                btnDesactivar.innerHTML = "Activar";  
                btnDesactivar.id = "activarOferta" + idOferta;
                btnDesactivar.setAttribute("name","activar");
            },      
            error: function(jqXHR, textStatus, errorThrown){
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
});
*/
</script>