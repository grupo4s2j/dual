@extends('scaffold-interface.layouts.app')
@section('title','Dashboard')
@section('content')
    <link rel="stylesheet" href="http://markusslima.github.io/bootstrap-filestyle/css/bootstrap.min.css">
    <section class="content">
        <div class="row">
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Idiomas</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('admin/otros/csv/ImportIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/idiomes')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Aptitudes</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/skills')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Estudios</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/estudis')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Sectores</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('otros/csv/ImportIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/sector')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Familias Profesionales</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/sector')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Provincias</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/sector')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-xs-8">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Poblaciones</h3>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('importIdiomes') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <input type="file" name="import_file" />
                            {{csrf_field()}}
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/sector')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
