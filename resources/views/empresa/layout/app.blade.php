@extends('scaffold-interface.layouts.appMenuHorizontal')
@section('menu_options')
    <li><a href="{{ url('empresa')}}">Overview</a></li>
    <li><a href="{{ url('empresa2')}}">Overview 2</a></li>
    <li><a href="{{ url('ofertas')}}">Ofertas</a></li>
@endsection