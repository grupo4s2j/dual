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
                    <label for="inputCIF" class="control-label" style="font-size: 20px;">{{$objInfo->descOfertaBreve}}</label>
                </div>
            </div>
            <div class="form-group">
                <label for="descOferta" class="col-sm-2 control-label">Descripcion Oferta</label>
                <div class="col-sm-9">
                    <textarea for="inputCIF" class="control-label" rows="15" style="width: 100%; height: 100%; resize: none;" disabled>{{$objInfo->descOferta}}</textarea>
                </div>
            </div>
        </div>
        </div>
        <br>
        <table id="example1" class="table table-striped table-bordered table-hover"
               aria-describedby="example1_info" role="grid" style='background:#fff'>
            <thead style="background-color:#ffccbc ">
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                    colspan="1" aria-label="Rendering engine: activate to sort column descending"
                    style="width: 86px;" aria-sort="ascending">
                    Alumno
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="Browser: activate to sort column ascending" style="width: 110px;">
                    % Total
                </th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    % Skills
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    % Estudios
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    % Idiomas
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    Actions
                </th>
            </tr>

            </thead>
            <tbody>
            {{--@foreach($objInfo as $empresa)--}}
                {{--<tr role="row" class="odd">--}}

                    {{--<td>{!!$empresa->descOferta!!}</td>--}}
                    {{--<td>{!!$empresa->descOfertaBreve!!}</td>--}}
                    {{--<td>--}}
                        {{----}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>

    </section>
@endsection
