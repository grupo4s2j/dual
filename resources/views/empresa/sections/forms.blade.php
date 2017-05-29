<ul class="nav nav-tabs">
    <li class="{{ empty($tabName) || $tabName == 'empresa' ? 'active' : '' }}"><a href="#empresa" data-toggle="tab" aria-expanded="true">Empresa</a></li>
    <li class="{{ empty($tabName) || $tabName == 'contacto' ? 'active' : '' }}"><a href="#contacto" data-toggle="tab" aria-expanded="false">Contacto</a></li>
    <li class="{{ empty($tabName) || $tabName == 'ofertas' ? 'active' : '' }}"><a href="#ofertas" data-toggle="tab" aria-expanded="false">Ofertas</a></li>
    <li class="{{ empty($tabName) || $tabName == 'misofertas' ? 'active' : '' }}"><a href="#misofertas" data-toggle="tab" aria-expanded="false">Mis ofertas creadas</a></li>
</ul>
<div class="tab-content">
    <!--<div class="tab-pane active" id="empresa">-->
    <div class="tab-pane {{ empty($tabName) || $tabName == 'empresa' ? 'active' : '' }}" id="empresa">
        @include('empresa.forms.empresa')
    </div>
    <!--<div class="tab-pane" id="contacto">-->
    <div class="tab-pane {{ empty($tabName) || $tabName == 'contacto' ? 'active' : '' }}" id="contacto">
        @include('empresa.forms.contacto')
    </div>
    <!--<div class="tab-pane" id="ofertas">-->
    <div class="tab-pane {{ empty($tabName) || $tabName == 'ofertas' ? 'active' : '' }}" id="ofertas">
        @include('empresa.forms.ofertas')
    </div>
    <!--<div class="tab-pane" id="misofertas">-->
    <div class="tab-pane {{ empty($tabName) || $tabName == 'misofertas' ? 'active' : '' }}" id="misofertas">
        {{--@include('empresa.forms.misOfertasCreadas')--}}
        @include('empresa.forms.misOfertas')
    </div>
    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->