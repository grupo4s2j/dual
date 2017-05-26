$(document).ready(function() {
    
    //FUNCION PARA AÑADIR SKILLS A LAS OFERTAS
    $("#addSkillOferta").click(function() {
        var nombre = $('#selectSkills').find(":selected").text();
        var valor = $('#selectSkills').find(":selected").val();
        $('#ofertasSkills').append('<tr><td>'+ nombre +'</td><td><button type="button" id="'+nombre+'" value="'+nombre+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button><input type="hidden" value="'+valor+'" name="inputSkills[]"></td></tr>');
    });
    
    //FUNCION PARA ELIMINAR SKILLS DE LAS OFERTAS
    $(document).on("click", "#ofertasSkills button", function() {
        $(this).closest('tr').remove();
    });
    
    //FUNCION PARA AÑADIR SECTORES A LA EMPRESA
    $('#sectorempresa').on('submit', function(e){      
        e.preventDefault(e);

        var data = $(this).serialize();
        var url = 'empresa/sectorial';
        var recipiente = ['#tablaSectores', 'form#sectorempresa select[name=inputSectorEmpresarial]'];

        $.myAjaxFunction(url, data, recipiente);
    });

    //FUNCION PARA ELIMINAR SECTORES A LA EMPRESA
    $(document).on('click', '#tablaSectores button', function(e){
        e.preventDefault(e);

        //var recipiente = '#tablaSectores';
        var recipiente = ['#tablaSectores'];

        var empresa = $(this).attr('empresa');
        var sector = $(this).attr('sector');

        var url = 'empresa/sector/delete'
        var data = {empresa : empresa, sector : sector};

        $.myAjaxFunction(url, data, recipiente);
    });

    //FUNCION PARA ELIMINAR OFERTAS DE LA EMPRESA
    $(document).on('click', '#tablaOfertas button.btn-danger', function(e){
        e.preventDefault(e);

        //var recipiente = '#tablaOfertas';
        var recipiente = ['#tablaOfertas'];

        var empresa = $(this).attr('empresa');
        var oferta = $(this).attr('oferta');

        var url = 'empresa/oferta/delete';
        var data = {empresa : empresa, oferta : oferta};

        $.myAjaxFunction(url, data, recipiente);
    });
    
    //FUNCION PARA AÑADIR SKILLS A LAS OFERTAS
    $("form#empresa select[name=inputProvincia]").change(function() {
        
        //var recipiente = 'form#empresa select[name=inputPoblacion]';
        var recipiente = ['form#empresa select[name=inputPoblacion]'];
        

        var provincia = $(this).val();

        var url = 'empresa/poblacion/change';
        var data = {provincia : provincia};

        $.myAjaxFunction(url, data, recipiente);
    });

    //FUNCION PARA HACER LOS AJAX
    $.myAjaxFunction = function(url, data, recipiente){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $.ajax({
            type:"POST",
            url: url,
            data: data,
            dataType: 'json',
            success: function(response){
                var json = JSON.parse(response);
                if('html_select' in json){
                    $(recipiente[1]).empty();
                    $.each(json['html_select'], function(key, value){
                        $(recipiente[1]).append(value);
                    });
                }
                $(recipiente[0]).html(json['html_tabla']);
                $.myNotification('success', 'Se actualizó correctamente');
                //console.log(json);
                //alert(response);
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    };
    
    //FUNCION PARA NOTIFICACIONES TOASTR
    $.myNotification = function(type, message){
        switch(type){
            case 'info':
                toastr.info(message);
                break;

            case 'warning':
                toastr.warning(message);
                break;

            case 'success':
                toastr.success(message);
                break;

            case 'error':
                toastr.error(message);
                break;
        }
    };
});