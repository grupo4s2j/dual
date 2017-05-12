@extends('scaffold-interface.layouts.app')
@section('title','Dashboard')
@section('content')
    <link rel="stylesheet" href="http://markusslima.github.io/bootstrap-filestyle/css/bootstrap.min.css">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
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

        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPAE","Activitats físiques i esportives");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPAG","Administració i gestió");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPAR","Agrària");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPAF","Arts gràfiques)");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPCM","Comerç i màrqueting");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPEO","Edificació i obra civil");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPEE","Electricitat i electrònica");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPEA","Energia i aigua");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPFM","Fabricació mecànica");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPFS","Fusta, moble i suro");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPHT","Hoteleria i turisme");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIS","Imatge i so");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIP","Imatge personal");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIA","Indústries alimentàries");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIE","Indústries extractives");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIC","Informàtica i comunicacions");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPIM","Instal·lació i manteniment");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPMP","Maritimopesquera");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPQU","Química");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPSA","Sanitat");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPSM","Seguretat i medi ambient");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPSC","Serveis socioculturals i a la--}}
        {{--comunitat");--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPTM","Transport i manteniment de vehicle"`;--}}
        {{--INSERT INTO `families`( `codiFamilia`, `descFamilia`) VALUES ("CFPTX","Tèxtil, confecció i pell");--}}



@endsection
