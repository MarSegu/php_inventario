<?php

include("db.php");

if(isset($_POST['comprar_producto'])){
 
    $cantidad1 = $_POST['cantidad'];
    if($cantidad > 0){
        $query = "SELECT precio FROM productos WHERE id = 1";

        $resul=mysqli_query($conn, $query);

        $row = mysqli_fetch_array($resul);

        $total = $row['precio']*$cantidad;
    } 

}
?>

<!-- Inicio de pagina-->

<?php include("includes/header.php")?>

<!--<body style="background-color: #289EE6;">-->
<?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset(); } ?>

<br>
    <br>
    <h1 align ='center'>Supermercado PHP</h1>
    <h2 align ='center'>Bienvenido Cliente</h2>
    <h2 align ='center'>Pensamos en usted</h2>

    <br>
    <br>
    <h3 align ='center'>Su factura:</h3>

    <div align ='center'>
        <?php echo 'El valor total de sus productos es:'.$total?>
    </div>
    <br>
    <h3 align ='center'>Gracias por su compra</h3>

    <a href="index.php" class="nav-link active">Regresar al inicio</a>

<?php


/*
        if(!$resul){

            die("Query Failed");

        }else{


            $_SESSION['message'] = 'Gracias por su compra.';
            $_SESSION['message_type']= 'success';

        }

    }
    
}
*/
?>

