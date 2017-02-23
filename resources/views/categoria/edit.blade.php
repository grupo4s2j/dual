@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit categoria
    </h1>
    <form method = 'get' action = '{!!url("categoria")!!}'>
        <button class = 'btn btn-danger'>categoria Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("categoria")!!}/{!!$categoria->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input id="nombre" name = "nombre" type="text" class="form-control" value="{!!$categoria->
            nombre!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection