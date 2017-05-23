@extends('empresa.layout.app')
@section('metadata')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<section class="content">
    <div class="tab-content">
       
        <div id="home" class="tab-pane fade in active">
            <div class="content-wrapper" style="min-height: 901px;">

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            @include('empresa.sections.profile')
                            <!-- /.box -->

                            <!-- About Me Box -->
                            {{--@include('empresa.sections.aboutme')--}}
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <!--<div class="row">
                                
                                {{--@include('empresa.sections.gadget')--}}

                            </div>-->
                            <div class="nav-tabs-custom">
                                @include('empresa.sections.forms')
                            </div>
                            <!-- /.nav-tabs-custom -->
                            
                            {{--@include('empresa.sections.tablaofertas')--}}

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
    $(document).ready(function() {
        //FUNCION PARA AÑADIR SKILLS A LAS OFERTAS
        $("#addSkillOferta").click(function() {
            var nombre = $('#selectSkills').find(":selected").text();
            var valor = $('#selectSkills').find(":selected").val();
            $('#ofertasSkills').append('<tr><td>'+ nombre +'</td><td><button type="button" id="'+nombre+'" value="'+nombre+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button><input type="hidden" value="'+valor+'" name="inputSkills[]"></td></tr>');
        });
        //FUNCION PARA ELIMINAR SKILLS DE LAS OFERTAS
        $(document).on("click", "#ofertasSkills button", function() {
            $(this).closest('tr').remove();
        });
        
    });
</script>
<script>
    $(document).ready(function() {
        $('#sectorempresa').on('submit', function(e){      
            e.preventDefault(e);
            
            var data = $(this).serialize();
            var url = 'empresa/sectorial';
            
            $.myAjaxFunction(url, data);
        });
        
        $(document).on('click', '#casablanca button', function(e){
            e.preventDefault(e);
            
            var empresa = $(this).attr('empresa');
            var sector = $(this).attr('sector');
            
            var url = 'empresa/sector/delete'
            var data = {empresa : empresa, sector : sector};

            $.myAjaxFunction(url, data);
        });
        
        $.myAjaxFunction = function(url, data){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            
            $.ajax({
                type:"POST",
                url: url,
                data: data,
                dataType: 'json',
                success: function(response){
                    $('#casablanca').html(response);
                    //alert(response);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        };
    });
</script>
<!--
<script>
    $(document).ready(function() {
        $('#sectorempresa').on('submit', function(e){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            e.preventDefault(e);

            $.ajax({

                type:"POST",
                url:'empresa/sectorial',
                data:$(this).serialize(),
                dataType: 'json',
                success: function(response){
                    $('#casablanca').html(response);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
        
        $(document).on('click', '#casablanca button', function(e){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            e.preventDefault(e);
            
            var empresa = $(this).attr('empresa');
            var sector = $(this).attr('sector');

            $.ajax({
                type:"POST",
                url:'empresa/sector/delete',
                data:{empresa : empresa, sector : sector},
                dataType: 'json',
                success: function(response){
                    $('#casablanca').html(response);
                    //alert(response);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    });
</script>
-->

@endsection