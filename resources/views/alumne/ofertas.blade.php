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
            <table class='table'>
                <thead>
                     <th>Descripcion</th>
                     <th>Empresa</th>
                     <th>Població</th>
                     <th>Fecha Inicio</th>
                     <th>Ver Oferta</th>
                </thead>
                <tbody>
                @foreach($ofertas as $oferta)
                    <tr etiqueta="{{$oferta->id}}">
                        <td>{{$oferta->descOfertaBreve}}</td>
                        <td>{{$oferta->empreses->nombreSocial}}</td>
                        <td>{{$oferta->poblacio->poblacio}}</td>
                        <td>{{$oferta->dataEntrada}}</td>
                        <td><a marsal="caca">Ver oferta</td>
                    </tr>
                 @endforeach
                 </tbody>
            </table>
            <div class="modal fade" id="myModalOferta" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button style="width: 3%;" type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 style="margin-top: 15px" id="fecha"></h2>       
                        </div>
                        <div class="modal-body" id="modelParent" style="padding:20px 50px;">
                            <div class="modal-body" id="modelParent" style="padding:20px 50px;">
                                   
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
    var pene = $(this).closest('tr').attr('etiqueta');
    
});
</script>