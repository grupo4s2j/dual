<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Idiomas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <form action="/" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nivel de idioma</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="placeholder text">
                        </div>
                        <div class="form-group">

                            <select name="role_name" id="" class="form-control">

                                <option value="1">aaaa</option>

                            </select>
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
                                    <label for="exampleInputEmail1">Escritura</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Conversación</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="placeholder text">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="1">

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
                                                                             aria-hidden="true"></i></a>
                            </td>
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