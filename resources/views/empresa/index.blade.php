@extends('empresa.layout.app')
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
                            @include('empresa.sections.aboutme')
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="row">
                                
                                @include('empresa.sections.gadget')

                            </div>
                            <div class="nav-tabs-custom">
                                @include('empresa.sections.forms')
                            </div>
                            <!-- /.nav-tabs-custom -->
                            
                            @include('empresa.sections.tablaofertas')

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
@section('scripts')

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

@endsection