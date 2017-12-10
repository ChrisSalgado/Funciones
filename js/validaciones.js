$(document).ready(function(){
   $("#boton").click(function(){
      var Nombre = $("#Nombre").val();
       
      if(Nombre == ""){
          $("#Mensaje1").fadeIn();
          return false;
      }
   }); 
});