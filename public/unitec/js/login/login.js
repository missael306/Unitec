var Unitec = Unitec || {};
Unitec.Login = Unitec.Login || {};

Unitec.Login = (function () {
    "use strict";
    let LoginLoad = function () {

        this.Initialize = function () {
            obtenerFacultades();
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
    };

    return new LoginLoad();
})();
(function ($, window, document) {
    "use strict";
    $(function () {
        Unitec.Login.Initialize();
    });
})(window.jQuery, window, document);
