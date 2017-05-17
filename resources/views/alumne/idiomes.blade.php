<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Idiomas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updateIdiome'
                  enctype="multipart/form-data" class="form-horizontal">
                <input type='hidden' name='_token' value='{{Session::token()}}'>
                <div class="box-body">
                            <form action="/" method="post">
                                {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="idIdioma">Selecciona un idioma</label>
                                <select name="idIdioma" id="idIdioma" class="form-control">
                                    @foreach($idiomes as $ss)
                                        <option value="{{$ss->id}}">{{$ss->descIdioma}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-md-12">
                        <div class="form-group">
                            <label for="nivelGenerico">Nivel de idioma</label>
                            <select name="nivelGenerico" id="nivelGenerico" class="form-control">
                                <option value="Principiante">Principiante</option>
                                <option value="Basico">Basico</option>
                                <option value="Elemental">Elemental</option>
                                <option value="Pre-intermedio">Pre-intermedio</option>
                                <option value="Intermedio superior">Intermedio superior</option>
                                <option value="Avanzado">Avanzado</option>
                                <option value="Superior">Superior</option>
                            </select>
                        </div>
                         </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="lectura">Lectura</label>
                                    <select name="lectura" id="lectura" class="form-control">
                                        <option value="Baja">Baja</option>
                                        <option value="Media">Media</option>
                                        <option value="Alta">Alta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="escritura">Escritura</label>
                                    <select name="escritura" id="escritura" class="form-control">
                                        <option value="Baja">Baja</option>
                                        <option value="Media">Media</option>
                                        <option value="Alta">Alta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="conversacion">Conversación</label>
                                    <select name="conversacion" id="conversacion" class="form-control">
                                        <option value="Baja">Baja</option>
                                        <option value="Media">Media</option>
                                        <option value="Alta">Alta</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class='btn btn-primary'>Add Idioma</button>
                        </div>

                    </form>
                    <table class='table'>
                        <thead>
                        <th>Idioma</th>
                        <th>Nivel</th>
                        <th>Lectura</th>
                        <th>Escritura</th>
                        <th>Conversacion</th>
                        </thead>
                        <tbody>
                        @foreach($alumneIdi as $s)
                            <tr>
                                <td>{{$s->descIdioma}}</td>
                                <td>{{$s->pivot->nivelGenerico}}</td>
                                <td>{{$s->pivot->lectura}}</td>
                                <td>{{$s->pivot->escritura}}</td>
                                <td>{{$s->pivot->conversacion}}
                                </td><td><a href="alumne/{{$s->pivot->idIdioma}}/{{$s->pivot->idAlumno}}/deleteIdioma"
                                            class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
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