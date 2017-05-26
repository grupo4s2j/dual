<form  id="pdfdiv" method='POST' action='{!! url("alumne")!!}/{!!$alumne->id!!}/updatePerfil' enctype="multipart/form-data" class="form-horizontal">
    <input type='hidden' name='_token' value='{{Session::token()}}'>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" name ="nombre" id="nombre" placeholder="nombre" value="{!!$alumne->
        nombre!!}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Primer apellido</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="apellido1"  value="{!!$alumne->
        apellido1!!}"required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Segundo apellido</label>
        <div class="col-sm-10">

                <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="apellido2"  value="{!!$alumne->
        apellido2!!}"required>

        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Correo electrónico</label>

        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="email" name="email"  value="{!!$alumne->
        email!!}"required>
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label">Telefono fijo</label>

        <div class="col-sm-10">

                <input type="number" class="form-control" id="telf1" name="telf1" placeholder="telefono1" value="{!!$alumne->
        telf1!!}" required>

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Telefono móvil</label>

        <div class="col-sm-10">

            <input type="number" class="form-control" id="telf2" name="telf2" placeholder="telefono2"  value="{!!$alumne->
        telf2!!}"required>

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
        <label  class="col-sm-2 control-label">Código postal</label>

        <div class="col-sm-10">

                <input type="numbrer" class="form-control" id="CP" placeholder="CP" name="CP" value="{!!$alumne->
        CP!!}" required>

        </div>
    </div>
</form>
