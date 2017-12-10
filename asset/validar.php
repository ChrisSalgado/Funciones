<?php
 require("conexion.php");
error_reporting (0);

$usuario = $_POST['correo'];
$clave = $_POST['clave'];

$conexion = mysqli_connect('localhost', 'root', '', 'funciones');
$consulta = "SELECT * FROM usuario WHERE Nombre = '$usuario' and pass = '$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($fila > 0){
    header("location:Bienvenido.php");
}
else{
    echo '
        <script>
        alert("Error en la autenticacion");
        window.history.go(-1);
        </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?> 