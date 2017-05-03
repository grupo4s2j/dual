<!-- FORMULARIO DATOS PERSONA CONTACTO -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">Información de Contacto</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form id="contacto" class="form-horizontal" action="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="inputPersonaContacto" class="col-sm-3 control-label">Persona de Contacto</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputPersonaContacto" id="inputPersonaContacto" placeholder="Persona de Contacto" value="{{$empresa->personaContacto}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPersonaEmail" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputPersonaEmail" id="inputPersonaEmail" placeholder="Email" value="{{$empresa->email}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPersonaTelefono" class="col-sm-3 control-label">Teléfono</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputPersonaTelefono" id="inputPersonaTelefono" placeholder="Teléfono" value="{{$empresa->telf}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPersonaFAX" class="col-sm-3 control-label">FAX</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="inputPersonaFAX" id="inputPersonaFAX" placeholder="FAX" value="{{$empresa->FAX}}">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- FORMULARIO DATOS PERSONA CONTACTO -->