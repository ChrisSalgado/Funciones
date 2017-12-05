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
                        <li><a href="Register.php">Registrarse <span class="icon-circle-left"></span></a></li>
                        <li><a href="Login.php">Iniciar Sesión <span class="icon-circle-left"></span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
    </header>
    <div class="contenedor">
        <div class="form">
           <h2 class="form_titulo">Iniciar Sesión</h2> 
           <input type="text" class="form_input">
           <label for="" class="form_label">Usuario</label>
           <input type="password" class="form_input">
           <label for="" class="form_label">Contraseña</label>
           <input type="submit" class="form_submit">
        </div>
    </div>
   
    
    
    <script src="../js/index.js"></script>
    <script src="../js/jquery.js"></script>
     <script src="../js/form.js"></script>
</body>
</html>