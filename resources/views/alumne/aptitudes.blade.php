<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Aptitudes</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateAptitud'
                  enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                    <form action="/" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="idSkill">Skills</label>
                            <select  class="form-control"  id="idskill" name="idskill">
                                @foreach($skill as $skills)
                                    <option value={{$skills->id}}>{{$skills->skill}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class='btn btn-primary'>Add Aptitud</button>
                        </div>
                    </form>
                    <table class='table'>
                        <thead>
                        <th>Aptitudes</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($alumne->skill as $ss)
                            <tr>
                                <td>{{$ss->skill}}</td>
                                <td><a href="alumne/{{$ss->id}}/{{$ss->pivot->idAlumno}}/deleteAptitud"
                                       class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
    </div>
</div>
