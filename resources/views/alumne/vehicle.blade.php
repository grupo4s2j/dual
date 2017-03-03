<div class="row">
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