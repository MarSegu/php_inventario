<?php

    // Declaramos las variables de conexión
    $ServerName = "files.000webhost.com";
    $Username = "inventario123php";
    $Password = "Electronica*3";
    $NameBD = "id17212096_php_inventario";

    // Creamos la conexión con MySQL
    $conexion = new mysqli($ServerName, $Username, $Password, $NameBD);

    // Revisamos la Conexión MySQL
    if ($conexion->connect_error) {
        die("Ha fallado la conexión: " . $conexion->connect_error);
    }
    // Enviamos un mensaje de conexión correcta
    echo "Conectado correctamente";

/*
    session_start();
    $host="205.144.171.206";
    $username="ingmarseg-001";
    $passwd="Electronica1234";
    $dbname="php_manejoinventario";
    $port="6666";

    $conn=mysqli_connect(
        $host,
        $username,
        $passwd,
        $dbname,
        
    )
*/
?>