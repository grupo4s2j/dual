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
        $("#addSkillOferta").click(function() {
            var valor = $('#selectSkills').find(":selected").text();
            $('#ofertasSkills').append('<tr><td>'+ valor +'</td><td><button type="button" id="'+valor+'" value="'+valor+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></div></td></tr>');
        });
        $("#ofertasSkills button").click(function() {
            //var caca = $(this).val();
            //alert(caca);
            alert('burro');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#sectorempresa').on('submit', function(e){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            e.preventDefault(e);

            $.ajax({

                type:"POST",
                url:'empresa/update',
                data:$(this).serialize(),
                dataType: 'json',
                success: function(response){
                    //console.log(data);
                    $('#casablanca').html(response);
                    alert('you guys so');
                },
                error: function(data){
                    //alert('you guys so');
                }
            });
        });
    });
</script>
<!-- BUENO
<script>
    $(document).ready(function() {
        $('form').on('submit', function(e){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            e.preventDefault(e);

            $.ajax({

                type:"POST",
                url:'empresa/empresa',
                data:$(this).serialize(),
                dataType: 'json',
                success: function(data){
                    console.log(data);
                },
                error: function(data){

                }
            });
        });
    });
</script>
-->

<!--
   <script>
    $(document).ready(function() {
        $('form').on('submit', function(e){
            /*$.ajaxSetup({
                //header:$('meta[name="_token"]').attr('content')
                header:{{--csrf_token()--}}
            });*/
            
            
            //console.log($(this).serialize());

            $.ajax({
                type:"POST",
                url:'/empresa/empresa',
                data:$(this).serialize(),
                dataType: 'json',
                success: function(data){
                    console.log(data);
                },
                error: function(data){

                }
            });
            e.preventDefault(e);
        });
    });
</script>
-->

@endsection