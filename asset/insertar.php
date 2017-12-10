<?php
error_reporting (0);
include ('conexion.php');

$mysqli = new mysqli('localhost', 'root', '', 'funciones');


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //passwords are equals
            if($_POST['pass'] == $_POST['Repetirpass']){
                
                $nombre = $mysqli->real_escape_string($_POST["nombre"]);
                $apellido = $mysqli->real_escape_string($_POST["apellido"]);
                $DUI = $mysqli->real_escape_string($_POST["DUI"]);
                $Fecha = $mysqli->real_escape_string($_POST["Fecha"]);
                $pass = md5($_POST['pass']);
                $correo = $mysqli->real_escape_string($_POST["correo"]);
                
                //Consulta para insertar
                $insertar = "INSERT INTO usuario (Nombre, Apellido, DUI, Fecha, pass, correo) values ('".$nombre."', '".$apellido."', '".$DUI."', '".$Fecha."', '".$pass."', '".$correo."')";
                
                //verificar si ya esta insertado
                $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
                if(mysqli_num_rows($verificar_usuario) > 0 ){
                    echo '<script>
                            alert("El registro fue agregado con exito");
                            window.history.go(-1);
                          </script>   
                    ';
                    exit;
                }
                
                $verificar_DUI = mysqli_query($conexion, "SELECT * FROM usuario WHERE DUI = '$DUI'");
                if(mysqli_num_rows($verificar_usuario) > 0 ){
                    echo '<script>
                            alert("El registro fue agregado con exito");
                            window.history.go(-1);
                          </script>   
                    ';
                    exit;
                }
                
                
                //
                $resultado = mysqli_query($conexion, $insertar);
                
                if($mysqli->query($insertar) == true){
                    echo '<script>
                            alert("El registro fue agregado con exito");
                            window.history.go(-1);
                          </script>   
                    ';
                }else{
                    echo '<script>
                            alert("El registro no fue agregado");
                            window.history.go(-1);
                          </script>
                           
                    ';
                }
                
            }else{
               echo '<script>
                            alert("Las contra tiene que ser iguales");
                            window.history.go(-1);
                          </script>
                    ';
            }
        }

           
        //mysqli_free_result($query);
        mysqli_close($conexion);
?>