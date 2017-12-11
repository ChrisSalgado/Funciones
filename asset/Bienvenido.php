<!DOCTYPE html>

<?php
    session_start();
    error_reporting (0);
    $varsesion = $_SESSION['usuario'];   

    if($varsesion == null || $varsesion = ''){
         echo '
        <script>
        alert("USTED NO TIENE AUTORIZACIÓN");
        window.history.go(-1);
        </script>
    ';
        die;
    }

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/admin_estilo.css">
    <link rel="stylesheet" href="fonts.css">

</head>
<body> 
     
     <section id="contenedor_general">
      
     </section>
   
    <header>
        <div class="menu_bar" id="menu">
            <a href="#" class="bt-menu" ><span class="icon-menu"></span>Funcionalidades</a>
        </div>
        
        <nav id="nave">
            <ul>
                <li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
                <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
                <li><a href="#"><span class="icon-earth"></span>Nosotros</a></li>
                <li><a href="#"><span class="icon-envelop"></span>Contacto</a></li>
                <li class="submenu">
                    <a href="#"><span class="icon-user"></span>Usuario<span class="caret icon-circle-down"></span></a>
                    <ul class="children">
                        <li><a href="../asset/cerrar_sesion.php">cerrar sesión <span class="icon-circle-left"></span></a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </header>
    <h1 style="color: white;">Bienvenido/a: <?php  echo $_SESSION['usuario'] ?></h1>
    
    <section class = "contenedor_opciones">
            <div class="modificar_usuario opciones">
                <h3 class="mini_tema">Modificar Usuario</h3>
                <input type="button"  value= "Modificar Usuario" class="boton_general">
            </div>
            <div class="crear_usuario opciones">
                <h3 class="mini_tema">Crear Usuario</h3>
                <input type="button"  value= "Crear Usuario" class="boton_general">
            </div>
            <div class="borrar_usuario opciones">
                <h3 class="mini_tema">Borrar Usuario</h3>
                <input type="button"  value= "Borrar Usuario" class="boton_general">
            </div>
    </section>
    
    <script src="js/index.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
</body>
</html>