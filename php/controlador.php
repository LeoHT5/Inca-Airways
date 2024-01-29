<?php 

include("conexion.php");


//Registrar
function registrar(){
    if(isset($_POST['confirmar'])){
        if(strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['apellido']) >= 1 &&
            strlen($_POST['fecNac']) >= 1 &&
            strlen($_POST['direccion']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['email']) >= 1){
    
                $nombre = trim($_POST['nombre']);
                $apellido = trim($_POST['apellido']);
                session_start();
                $_SESSION['nombre'] = $nombre;
                $_SESSION['apellido'] = $apellido;
                $fecNac = date("d/m/y");
                $direccion = trim($_POST['direccion']);
                $telefono = trim($_POST['telefono']);
                $email = trim($_POST['email']);
                
                $consulta = "INSERT INTO usuario(nombre, apellido, fecha, direccion, telefono, email) VALUES ('$nombre', '$apellido', '$fecNac', '$direccion', '$telefono', '$email')";
                
                if (mysqli_query(conexionphp(), $consulta)) {
                        echo "<h3 style='text-align: center;'>¡Bienvenido " . $nombre . "!</h3>";
                }else{
                    ?> 
                        <h3 style="text-align: center;">¡Ups ha ocurrido un error!</h3>
                    <?php
                }
    
            }else{
                ?> 
                    <h3 style="text-align: center;">¡Complete los campos!</h3>
                <?php
            }
    }
}

//Venta
function venta(){
    if(isset($_POST['reservar'])){
        if(strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['apellido']) >= 1 &&
            isset($_POST['destino'])&&
            strlen($_POST['destino']) >= 1 &&
            strlen($_POST['pasajeros']) >= 1 &&
            strlen($_POST['precioTotal']) >= 1){
    
                $nombre = trim($_POST['nombre']);
                $apellido = trim($_POST['apellido']);
                $destino = trim($_POST['destino']);
                $pasajeros = trim($_POST['pasajeros']);
                $precio = trim($_POST['precioTotal']);
                
                $consulta = "INSERT INTO venta(nombre, apellido, destino, cantidad, precio) VALUES ('$nombre', '$apellido', '$destino', '$pasajeros', '$precio')";
    
                $conexion = conexionphp();
                
                if (mysqli_query($conexion, $consulta)) {
                    ?> 
                        <h3 style="text-align: center;">Venta completada</h3>
                    <?php
                }else{
                    ?> 
                        <h3 style="text-align: center;">¡Ups ha ocurrido un error!</h3>
                    <?php
                }
    
            }else{
                ?> 
                    <h3 style="text-align: center;">¡Complete los campos!</h3>
                <?php
            }
    }
}

?>