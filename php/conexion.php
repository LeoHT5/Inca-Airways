<?php 

conexionphp();

function conexionphp(){
    $server = "localhost";
    $username = "root";
    $pass = "123456";
    $dbname = "inkasky";

    $conn = mysqli_connect($server, $username, $pass, $dbname);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    
    return $conn;
}

?>