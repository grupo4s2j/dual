@extends('scaffold-interface.layouts.app')
@section('title','Oferta')
@section('content')
    <section class="content">
        <h1>
            Ofertas
        </h1>

        <br>
        <table id="example1" class="table table-striped table-bordered table-hover"
               aria-describedby="example1_info" role="grid" style='background:#fff'>
            <thead style="background-color:#ffccbc ">
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                    colspan="1" aria-label="Rendering engine: activate to sort column descending"
                    style="width: 86px;" aria-sort="ascending">Nombre Comercial
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="Browser: activate to sort column ascending" style="width: 110px;">
                    Titulo Oferta
                </th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    Descripcion Oferta
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                    aria-label="CSS grade: activate to sort column ascending" style="width: 48px;">
                    Actions
                </th>
            </tr>

            </thead>
            <tbody>
            @foreach($objE as $empresa)
                <tr role="row" class="odd">

                    <td>{!!$empresa->id!!}</td>
                    <td>{!!$empresa->descOferta!!}</td>
                    <td>{!!$empresa->descOfertaBreve!!}</td>
                    <td>
                        <a href='{!!url('/admin/empresa/oferta/'.$empresa->id)!!}' class='viewShow btn btn-success btn-xs'>
                            <i class='material-icons'>Buscar CV</i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </section>
@endsection
