<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../fonts.css">

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
                <li><a href="../index.php"><span class="icon-home"></span>Inicio</a></li>
                <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
                <li><a href="#"><span class="icon-earth"></span>Nosotros</a></li>
                <li><a href="#"><span class="icon-envelop"></span>Contacto</a></li>
                <li class="submenu">
                    <a href="#"><span class="icon-user"></span>Usuario<span class="caret icon-circle-down"></span></a>
                    <ul class="children">
                        <li><a href="../asset/Register.php">Registrarse <span class="icon-circle-left"></span></a></li>
                        <li><a href="../asset/Login.php">Iniciar Sesión <span class="icon-circle-left"></span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
    </header>
<<<<<<< HEAD
        <!--Registro!-->
        <div class="registro">
               <div class="tema">
                     <h2 class="">Registrar Usuario</h2>
                 </div>
                <form action="principal.php" method="POST" class="form">
                    <input type="text" placeholder="Nombre" id="nombre" name="nombre" class="input-text">
                    <input type="text" placeholder="Apellido" id="apellido" name="apellido" class="input-text">
                    <input type="text" placeholder="DUI/sin guión" id="DUI" name="DUI" class="input-text">
                    <input type="text" placeholder="Edad" id="edad" name="edad" class="input-text">
                    <input type="password" placeholder="Contraseña" id="pass" name="pass" class="input-text">
                    <input type="password" placeholder="Repetir Contraseña" id="Repetirpass" name="Repetirpass" class="input-text">
                    <input type="mail" placeholder="correo" id="correo" name="correo" class="input-text big">
                    <div class="boton">
                        <input type="submit" value ="Registrarse" name="boton" id="boton" class="boton-registro">
                    </div>
                </form>
        </div>
=======
    
    <form action="" method="">
        <div class="contenedor">
            <div class="form">
               <h2 class="form_titulo">Registrarse</h2> 
               <input type="text" class="form_input">
               <label for="" class="form_label">Nombre</label>
               <input type="text" class="form_input">
               <label for="" class="form_label">Apellido</label>
               <input type="text" class="form_input">
               <label for="" class="form_label">Edad</label>
               <input type="text" class="form_input">
               <label for="" class="form_label">Nombre de usuario</label>
               <input type="password" class="form_input">
               <label for="" class="form_label">Contraseña</label>
               <input type="password" class="form_input">
               <label for="" class="form_label">Repita contraseña</label>

               <label for="" class="form_label"></label>

               <input type="submit" class="form_submit">
            </div>
        </div>
    </form>
    
    
>>>>>>> 6a3400b075805abe8d1d43e1b0db71d44628f7e3
   
    
    
    <script src="../js/index.js"></script>
    <script src="../js/jquery.js"></script>
     <script src="../js/form.js"></script>
</body>
