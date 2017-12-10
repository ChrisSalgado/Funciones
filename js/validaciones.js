if (Register.form_registro.Nombre.value.length ==0){
    alert("Campo de nombre vacío");
    document.form_registro.Nombre.focus();
    return false;
} else if(Register.form_registro.Nombre.value.match(/[a-z]/)){
    alert("Solo se permiten letras");
    document.form_registro.Nombre.focus();
    return false;
}