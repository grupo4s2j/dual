@extends('scaffold-interface.layouts.app')
@section('title','Oferta')
@section('content')
    <section class="content">
        <h1>
            Ofertas
        </h1>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Información Oferta</h3>
            </div>
        <div class="box-body">
            <div class="form-group">
                <label for="TituloOferta" class="col-sm-2 control-label" >Titulo Oferta</label>
                <div class="col-sm-9">
                    <label for="inputCIF" class="control-label" style="font-size: 20px;">{{$oferta->descOfertaBreve}}</label>
                </div>
            </div>
            <div class="form-group">
                <label for="descOferta" class="col-sm-2 control-label">Descripcion Oferta</label>
                <div class="col-sm-9">
                    <textarea for="inputCIF" class="control-label" rows="15" style="width: 100%; height: 100%; resize: none;" disabled>{{$oferta->descOferta}}</textarea>
                </div>
            </div>
        </div>
        </div>
        <br>
                
        <!-- /.TABLA RANKING ALUMNOS -->
		<div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Ranking Alumnos para la Oferta</h3>
            </div>
            <!-- /.box-header -->
            
            <!--<table id="example2" class="table table-bordered table-hover">-->
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Selección</th>
                    <th>Alumno</th>
                    <th>% Total Matching</th>
                    <th>% Aptitudes</th>
                    <th>% Idiomas</th>
                    <th>% Estudios</th>
                </thead>
                <tbody id="renkingalumnes">
                    @foreach($alumnos as $alumno)
                        <tr alumno="{{$alumno->id}}">
                            <td align="center"><input type="checkbox" name="alumno[]" value="{{$alumno->id}}"/></td>
                            <td>{{$alumno->apellido1}}, {{$alumno->nombre}}</td>
                            <td>{{$alumno->percentages['percentageTotal']}}</td>
                            <td>{{$alumno->percentages['percentageSkills']}}</td>
                            <td>{{$alumno->percentages['percentageIdiomes']}}</td>
                            <td>{{$alumno->percentages['percentageEstudis']}}</td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button">Enviar Alumno/s</button>
        </div>
        
        
        <!-- /.TABLA OFERTAS_ALUMNOS -->
		<div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Alumnos asociados a la Oferta</h3>
            </div>
            <!-- /.box-header -->
            
            <table class='table'>
                <thead>
                    <th>Alumno</th>
                    <th>Action</th>
                </thead>
                <tbody id="alumnesoferta">
                    @foreach($oferta->alumnes as $alumno)
                        <tr alumno="{{$alumno->id}}">
                            <td>{{$alumno->apellido1}}, {{$alumno->nombre}}</td>
                            <td></td>                    
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
