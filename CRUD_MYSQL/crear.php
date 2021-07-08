<?php

include("db.php");

//crear productos
if(isset($_POST['guardar_producto'])){
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $lote = $_POST['lote'];
    $fecha_ven = $_POST['fecha_ven'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos(producto, cantidad, lote, fecha_vencimiento, precio)
                VALUES('$producto', '$cantidad', '$lote', '$fecha_ven', '$precio')";

    $result=mysqli_query($conn, $query);
    if(!$result){

        die("Query Failed");

    }else{

        $_SESSION['message'] = 'Producto agregado al inventario.';
        $_SESSION['message_type']= 'success';
        header("Location: index.php");

    }

}

//crear clientes
if(isset($_POST['enviar_cliente'])){
    $cliente = $_POST['cliente'];

    $query = "INSERT INTO clientes(cliente)
                VALUES('$cliente')";

    $result=mysqli_query($conn, $query);
    if(!$result){

        die("Query Failed");

    }else{

        $_SESSION['message'] = 'Cliente registrado.';
        $_SESSION['message_type']= 'success';
        header("Location: comprar.php");

    }

}

?>