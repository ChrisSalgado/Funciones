$(document).ready(function(){
      var btnMenu = document.getElementById("menu");
      var nav = document.getElementById("nave");

        btnMenu.addEventListener('click', function(){
        nav.classList.toggle('mostrar'); 
    });  
});
