<ul class="nav nav-tabs">
    <li class="active"><a href="#empresa" data-toggle="tab" aria-expanded="true">Empresa</a></li>
    <li class=""><a href="#contacto" data-toggle="tab" aria-expanded="false">Contacto</a></li>
    <li class=""><a href="#ofertas" data-toggle="tab" aria-expanded="false">Ofertas</a></li>
    <li class=""><a href="#misofertas" data-toggle="tab" aria-expanded="false">Mis ofertas creadas</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="empresa">
        @include('empresa.forms.empresa')
    </div>
    <div class="tab-pane" id="contacto">
        @include('empresa.forms.contacto')
    </div>
    <div class="tab-pane" id="ofertas">
        @include('empresa.forms.ofertas')
    </div>
	 <div class="tab-pane" id="misofertas">
        @include('empresa.forms.misOfertasCreadas')
    </div>
    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->