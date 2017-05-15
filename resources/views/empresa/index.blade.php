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

<script>
    /*$(document).ready(function() {
        $('form').submit(function(event) {
            console.log($(this).serializeArray());
            
            var pene = $(this).serializeArray();
            
            $.ajax({
                type: "POST",
                //url: "{{-- url('/empresa/empresa') --}}",
                url: "{{-- url('/empresa/prueba') --}}",
                //data: pene
                data: {name:name, message:message, post_id:postid}
                success: function( msg ) {
                    alert( msg );
                }
            });
            
            event.preventDefault(event);
        });
    });*/
</script>

@endsection