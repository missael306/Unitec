var Unitec = Unitec || {};
Unitec.Login = Unitec.Login || {};

Unitec.Login = (function () {
    "use strict";
    let LoginLoad = function () {

        this.Initialize = function () {
            obtenerFacultades();
            registrarUsuario();
        };  
        
        let obtenerFacultades = function(){  
            /*
                Obtiene las facultades correspondientes a un grado academico
                Nota: Preparatoria no tiene facultades
            */
            $("#sltGradoAcademico").change(function(){    
                let idGradoAcademico = $(this).val();            
                $.ajax({
                    url: `/login/obtener-facultades`,
                    data : { idGradoAcademico : idGradoAcademico}
                }).done(function (response) {
                    let sltFacultades = $("#sltFacultad");
                    sltFacultades.html("")
                    sltFacultades.append(new Option("--Seleccione--", ""));
                    response.facultades.forEach(function(item,index){
                        sltFacultades.append(new Option(item.facultad, item.id_facultad));
                    });  
                    if(response.facultades.length > 0){
                        sltFacultades.removeAttr("disabled");
                    }else{
                        sltFacultades.attr("disabled","disabled");
                    }
                });
            })
        } 

        let registrarUsuario = function(){
            $("#frmRegistrar").submit(function(event){
                event.preventDefault();
                let formRegistrar = $(this);
                let ruta = formRegistrar.attr("action");
                let model = formRegistrar.serialize();
                $.ajax({
                    url: ruta,
                    data : model,
                    type: 'POST'
                }).done(function (response) {
                    console.log(response)
                    formRegistrar[0].reset();
                    $("#mdlCrearCuenta").modal("hide");
                    if(response.response){
                        $.alert({
                            title: "Usuario registrado",
                            type: "green",
                            content: "Por favor, inicia sesión"
                        })
                    }else{
                        $.alert({
                            title: "Ocurrio un error",
                            type: "orange",
                            content: "Intente más tarde"
                        })
                    }
                }).fail(function( jqXHR, textStatus ){
                    $.alert({
                        title: "Ocurrio un error",
                        type: "orange",
                        content: jqXHR.responseJSON.message
                    })
                });
            })
        }
    };

    return new LoginLoad();
})();
(function ($, window, document) {
    "use strict";
    $(function () {
        Unitec.Login.Initialize();
    });
})(window.jQuery, window, document);
