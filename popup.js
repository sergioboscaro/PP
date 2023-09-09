$("#formulario_pozos").submit(function(){
    
    var pozo = $("#nombre").val();
    var precio =$("#precio").val();
    var categoria = $("#categorias").val();
    var descripcion = $("#descrip").val();
    
    var errores = [];
    
    if ($.trim(pozo) == '')
        errores.push("Debe completar Pozo");
    
    if ($.trim(descripcion) == '')
        errores.push("Debe completar Descripcion");
    
    if ($.trim(precio) == '')
        errores.push("Debe completar Precio");
        
    if ($.trim(categoria) == '')
        errores.push("Debe completar Categorias");
      
    if (errores.length >0){
        errores.push ("SERGIO_BOSCARO");
        alert(errores.join("\n"));
        return false;
    }
    return true;
});
