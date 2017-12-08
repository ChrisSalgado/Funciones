if (document.form_registro.nombre.value.length ==0){
    alert("Campo de nombre vacío");
    document.form_registro.nombre.focus();
    return false;
} else if(document.form_registro.nombre.value.match(/[a-z]/)){
    alert("Solo se permiten letras");
    document.form_registro.nombre.focus();
    return false;
}