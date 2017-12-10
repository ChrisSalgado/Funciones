<?php

$mysqli = new mysqli('localhost', 'root', '', 'funciones');

error_reporting (0);
include ('conexion.php');
        
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
                $verificar_correo = mysqli_query($conexion, "SELECT correo FROM usuario WHERE correo = '$correo'");
                if(mysqli_num_rows($verificar_correo) > 0 ){
                    echo '<script>
                            alert("Este correo ya existe");
                            window.history.go(-1);
                          </script>   
                    ';
                    exit;
                }
                
                $verificar_DUI = mysqli_query($conexion, "SELECT DUI FROM usuario WHERE DUI = '$DUI'");
                if(mysqli_num_rows($verificar_DUI) > 0 ){
                    echo '<script>
                            alert("El numero de DUI ya existe");
                            window.history.go(-1);
                          </script>   
                    ';
                    exit;
                }
                

                //Ejecutar consulta
                $resultado = mysqli_query($conexion, $insertar);

                if(!$resultado){
                     echo '<script>
                                    alert("El registro no fue agregado");
                                    window.history.go(-1);
                                  </script>   
                            ';
                }else{
                    echo '<script>
                                    alert("El registro fue agregado con exito");
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
           
        //mysqli_free_result($query);
        mysqli_close($conexion);
?>