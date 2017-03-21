<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Aptitudes</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST'
                  enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                    <form action="/" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group">
                            <label for="idArea">Skills</label>

                            <select  class="form-control"  id="idArea" name="idArea">
                                @foreach($skill as $skills)
                                    <option value={{$skills->id}}>{{$skills->skill}}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="form-group">
                            <button class='btn btn-primary'>Add Aptitud</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                </div>
            </form>
        </div>

    </div>

</div>
