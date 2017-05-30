@extends('scaffold-interface.layouts.app')
@section('title','Oferta')
@section('content')
    <section class="content-header">
        <h1>Oferta</h1>
    </section>
    <section class="content">
        <div class="row">

            <table class='table'>
                <thead>
                <th>Idioma</th>
                <th>Nivel</th>
                <th>Lectura</th>
                <th>Escritura</th>
                <th>Conversacion</th>
                </thead>
                <tbody>
                @foreach($objAlumno as $s)
                    <tr>
                        <td>{{$s}}</td>
                        {{--</td><td><a href="alumne/{{$s->idProvincia}}/deleteIdioma"--}}
                                    {{--class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
