@extends('alumne.layout.app')
@section('content')
    <section class="content">

        <div class="tab-content">
            {{--<h3>Estudis</h3>--}}
            <div id="home" class="tab-pane fade in active">
                @include('alumne.home')
            </div>
            {{--<div id="menu0" class="tab-pane fade">--}}
                {{--@include('alumne.estudis')--}}
            {{--</div>--}}
            {{--<div id="menu1" class="tab-pane fade">--}}
                {{--@include('alumne.experiencia')--}}
            {{--</div>--}}
            {{--<div id="menu3" class="tab-pane fade">--}}
                {{--@include('alumne.vehicle')--}}
            {{--</div>--}}
            {{--<div id="menu5" class="tab-pane fade">--}}
                {{--@include('alumne.altres')--}}
            {{--</div>--}}
            {{--<div id="menu4" class="tab-pane fade">--}}
                {{--@include('alumne.idiomes')--}}
            {{--</div>--}}
            {{--<div id="menu2" class="tab-pane fade">--}}
                {{--@include('alumne.ucAlumne')--}}
            {{--</div>--}}
        </div>
    </section>
@endsection