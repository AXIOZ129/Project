function getCaptchaResponse() {
    var response = grecaptcha.getResponse();
    
    if(response.length == 0) {
    $("#g-recaptcha-error").show(0);
    } else {
    alert("Continuar con el envio del formulario");
    }
    }
    
    function verifyCaptcha() {
    $("#g-recaptcha-error").hide(0);
    }
    
    $("#submitForm").click(function () {
    getCaptchaResponse();
    });

        $("#accion").change(function() {
            var accion = $('#accion').val();

            switch(accion){
                case 'añadir':
                    $('#texto').fadeOut([800]);
                    $('#divP').fadeOut([800]);
                    $('#divC').fadeOut([800]);
                    $('#aceptar').fadeIn([400]);
                    $('#enter').fadeIn([400]);
                    break;
                case 'modificar':
                    $('#divC').fadeOut([800]);
                    $('#divP').fadeIn([400]);
                    $('#texto').fadeIn([400]);
                    $('#aceptar').fadeIn([400]);
                    $('#enter').fadeOut([800]);
                    break;
                case 'borrar':
                    $('#texto').fadeOut([800]);
                    $('#divC').fadeOut([800]);
                    $('#divP').fadeIn([400]);
                    $('#aceptar').fadeIn([400]);
                    $('#enter').fadeOut([800]);
                    break;
                case 'colores':
                    $('#texto').fadeOut([800]);
                    $('#divP').fadeIn([400]);
                    $('#divC').fadeIn([400]);
                    $('#aceptar').fadeIn([400]);
                    $('#enter').fadeOut([800]);
                    break;
                case 'inicio':
                    $('#texto').fadeOut([800]);
                    $('#divP').fadeOut([800]);
                    $('#divC').fadeOut([800]);
                    $('#aceptar').fadeOut([800]);
                    $('#enter').fadeOut([800]);
                    break;
            }
    });
    
    function data (){
        var cantidad = $('#div1 h5').length;
        for(i = 0; i != cantidad; i = i + 1 ) {
            $('#posicion').append("<option value="+ i + ">" + "Posicion " + i + "</option>");
        } $('select').formSelect();
    }


    $(document).ready(function(){
        var accion = $('#accion').val();
        data();
        if(accion == "inicio"){
            $('#texto').hide();
            $('#divC').hide();
            $('#divP').hide();
            $('#aceptar').hide();
            $('#enter').hide();
        }
     });

     $(document).scroll(function() {
        var sv = $(document).scrollTop();

        if(sv >= 50 && sv <= 90){

            alert("Cambio de posicion detectado");

        }
    });
     
     $("#enter").keypress(function(e){

        var select = $('#accion').val();
        var contenido = $('#texto').val();
        var posicion = $('#posicion').val();
        var color = $('#colors').val();
        var enter = $('#enter').val();
        var code = (e.keyCode ? e.keyCode : e.which);

    if(code==13){
        
        if (select == "añadir"){
            $('#div1').append(enter);
            $('#texto').val('');
            $('#accion').val('');
            $('#posicion').empty();
            $('#enter').val('');
            data();
        }else if (select == "modificar"){
            $('#div1').find('h5').eq(posicion).html(contenido);
            $('#posicion').val('');
            $('#texto').val('');
            $('#accion').val('');
        }else if (select == "borrar"){
            $('#div1').find('h5').eq(posicion).remove();
            $('#texto').val('');
            $('#accion').val('');
            $('#posicion').empty();
            data();
        }else if (select == "colores" ) {
            switch(color){
                case 'azul':
                    $('#div1').find('h5').eq(posicion).css({ 'color' : 'blue' });
                    break;
                case 'rojo':
                    $('#div1').find('h5').eq(posicion).css({ 'color' : 'red' });
                    break;
                case 'verde':
                    $('#div1').find('h5').eq(posicion).css({ 'color' : 'green' });
                    break;
                }
            }
        }
    });