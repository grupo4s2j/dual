@extends('scaffold-interface.layouts.app')
@section('title','Dashboard')
@section('content')
    <link rel="stylesheet" href="http://markusslima.github.io/bootstrap-filestyle/css/bootstrap.min.css">
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Idiomes</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/idiomes')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Skills</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/skills')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Estudis</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/estudis')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Sector</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/sector')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Families Profesionals</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/familiesprofesionals')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Poblacions</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/poblacions')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>Provincies</h3>
                        <div>
                            <label for="files" class="btn btn-default"> Imporar CSV</label>
                            <input id="files" style="visibility:hidden;" type="file">
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="{{url('admin/otros/provincies')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            {{--<div class="col-lg-3 col-xs-6">--}}
                {{--<!-- small box -->--}}
                {{--<div class="small-box bg-green">--}}
                    {{--<div class="inner">--}}
                        {{--<h3>Tipus Carnet</h3>--}}
                        {{--<div>--}}
                            {{--<label for="files" class="btn btn-default"> Imporar CSV</label>--}}
                            {{--<input id="files" style="visibility:hidden;" type="file">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="icon">--}}
                        {{--<i class="fa fa-book"></i>--}}
                    {{--</div>--}}
                    {{--<a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>
@endsection
