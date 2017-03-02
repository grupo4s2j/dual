@extends('scaffold-interface.layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Estudis Reglats</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Desc Centre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Any Obtencio</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nota Expedient</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estudi ->>> DROPDOWN</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>


            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Estudis NO Reglats</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Desc Centre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Desc Estudi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Any Obtencio</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Horas</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="placeholder text">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Experiencia Laboral</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Desc Empresa</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">idSector -->> DROPDOWN</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="exampleInputEmail1">Data Inici</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                                <div class="col-xs-6">
                                    <label for="exampleInputEmail1">Data final</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mesos Contracte</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Categoria</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Comentari</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                                              placeholder="placeholder text"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Uc Alumne</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <form action="/" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id" value="1">
                                <div class="form-group">
                                    <select name="role_name" id="" class="form-control">

                                        <option value="1">aaaa</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class='btn btn-primary'>Add Uc Alumne</button>
                                </div>
                            </form>
                            <table class='table'>
                                <thead>
                                <th>Codi</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>aaaa</td>
                                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Vehicle</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <form action="/" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id" value="1">
                                <div class="form-group">
                                    <select name="role_name" id="" class="form-control">

                                        <option value="1">aaaa</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class='btn btn-primary'>Add vehicle</button>
                                </div>
                            </form>
                            <table class='table'>
                                <thead>
                                <th>Codi</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>aaaa</td>
                                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Idiomes</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <form action="/" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nivell generic</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lectura</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   placeholder="placeholder text">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Escriptura</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   placeholder="placeholder text">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Conversa</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   placeholder="placeholder text">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="1">
                                <div class="form-group">

                                    <select name="role_name" id="" class="form-control">

                                        <option value="1">aaaa</option>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <button class='btn btn-primary'>Add Idioma</button>
                                </div>
                            </form>
                            <table class='table'>
                                <thead>
                                <th>Codi</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>aaaa</td>
                                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Carnet</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <form action="/" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id" value="1">
                                <div class="form-group">
                                    <select name="role_name" id="" class="form-control">

                                        <option value="1">aaaa</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class='btn btn-primary'>Add carnet</button>
                                </div>
                            </form>
                            <table class='table'>
                                <thead>
                                <th>Codi</th>
                                <th>Action</th>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>aaaa</td>
                                    <td><a href="/" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i></a></td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Altres dades d'interess</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">comentari</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Estudia ara</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="exampleInputEmail1">mobilitat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                                <div class="col-xs-6">
                                    <label for="exampleInputEmail1">Radi mobilitat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">discapacitat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">grau discapacitat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">altres</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                                              placeholder="placeholder text"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection