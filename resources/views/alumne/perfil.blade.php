<form method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updatePerfil' enctype="multipart/form-data" class="form-horizontal">
    <input type='hidden' name='_token' value='{{Session::token()}}'>
    <div class="form-group">
        <label  class="col-sm-2 control-label">DNI</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="DNI" name="DNI" placeholder="DNI" value="{!!$alumne->
        DNI!!}" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" name ="nombre" id="nombre" placeholder="nombre" value="{!!$alumne->
        nom!!}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Apellido 1</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="apellido1"  value="{!!$alumne->
        apellido1!!}"required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Apellido 2</label>
        <div class="col-sm-10">

                <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="apellido2"  value="{!!$alumne->
        apellido2!!}"required>

        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="email" name="email"  value="{!!$alumne->
        email!!}"required>
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Telefono 1</label>

        <div class="col-sm-10">

                <input type="number" class="form-control" id="telefono1" name="telefono1" placeholder="telefono1" value="{!!$alumne->
        telefono1!!}" required>

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Telefono 2</label>

        <div class="col-sm-10">

            <input type="number" class="form-control" id="telefono2" name="telefono2" placeholder="telefono2"  value="{!!$alumne->
        telefono2!!}"required>

        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Dirección</label>

        <div class="col-sm-10">

                <input type="text" class="form-control" id="direccion" placeholder="direccion" name="direccion" value="{!!$alumne->
        direccion!!}"required>

        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">CP</label>

        <div class="col-sm-10">

                <input type="numbrer" class="form-control" id="cp" placeholder="cp" name="cp" value="{!!$alumne->
        cp!!}" required>

        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Foto</label>

        <div class="col-sm-10">

                <input type="file" class="form-control" id="foto" placeholder="foto" name="foto"  value="{!!$alumne->
        nom!!}"required>

        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>