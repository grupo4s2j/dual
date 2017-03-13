@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{ url('/dashboard') }}">BACKOFFICE</a>

                <div class="panel-body">
                    <h1>Bienvenido {{auth::user()->name}} !!!!</h1>

                </div>
        </div>
    </div>
</div>
@endsection
