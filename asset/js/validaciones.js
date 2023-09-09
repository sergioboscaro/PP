$("#formulario_datopozo").submit(function(){
    
    var Pozo = $("#Pozo").val();
    var Descripcion =$("#Descripcion").val();
    var Fluido = $("#Fluido").val();
    var Seco = $("#Seco").val();
    var Gas = $("#Gas").val();
    
    var errores = [];
    
    if ($.trim(Pozo) === '')
        errores.push("Debe completar Pozo");
    
    if ($.trim(Descripcion) === '')
        errores.push("Debe completar Descripcion");
    
    if ($.trim(Fluido) === '')
        errores.push("Debe completar Fluido");
        
    if ($.trim(Seco) === '')
        errores.push("Debe completar Seco");
    
    if ($.trim(Gas) === '')
        errores.push("Debe completar Gas");
      
    if (errores.length >0){
        errores.push ("SERGIO_BOSCARO");
        alert(errores.join("\n"));
        return false;
    }
    return true;
});