$(document).ready(function() {
    
    $('#enviarAlumnos').click(function () {
        var alumnosAsig = [];
        $('table#asignarAlumnos').find('input[type="checkbox"]:checked').each(function () {
            alumnosAsig.push($(this).val());
        });
        //console.log(alumnosAsig);
        var oferta = $('input#idOferta').val();
        if (!(alumnosAsig.length === 0)) {
            var url = '/admin/empresa/oferta/match';
            var data = {alumnos : alumnosAsig, oferta : oferta};

            $.myAjaxFunction(url, data);
        }
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
    $.myAjaxFunction = function(url, data){
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $.ajax({
            type:"POST",
            url: url,
            data: data,
            dataType: 'json',
            success: function(response){
                //$.myNotification('success', 'Se actualizó correctamente');
                console.log(response);
                //alert(response);
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                //$.myNotification('error', 'No se actualizó correctamente');
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