@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create categoria
    </h1>
    <form method = 'get' action = '{!!url("categoria")!!}'>
        <button class = 'btn btn-danger'>categoria Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("categoria")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input id="nombre" name = "nombre" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection