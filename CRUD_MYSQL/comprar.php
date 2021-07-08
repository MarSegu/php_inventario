<?php include("db.php")?>
<?php session_unset(); ?>

<?php

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

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL CRUD</title>
    
    <!-- Bootstrap 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
    crossorigin="anonymous"/>

    <script src = "validacion_compra.js"></script>
    <link rel="stylesheet" type = "text/css" href="validacion_compra.css">

</head>
<body style="background-color: #B4E829;">

<nav class="navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Supermercado PHP</a>
    </div>
</nav>


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
    <h3 align ='center'>Ordenar productos:</h3>

    <div class= "container p-4">

        <div class= "row">
            
            <div class= "container-md-8">

                <div class="card card-body">

                        <table class="table table-bordered">
                            <thead>
                                
                                <th style="width: 150px;text-align:center;">Producto</th>
                                <th style="width: 150px;text-align:center;">Precio</th>
                                <th style="width: 150px;text-align:center;">Cantidad</th>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT id, producto, precio from productos";
                                    $resul_productos=mysqli_query($conn, $query);
                                    
                                    $valor = 1;
                                    while($row = mysqli_fetch_array($resul_productos)){?>
                                        <tr>
                                            
                                            <td align = 'center'><?php echo $row['producto'] ?></td>
                                            <td align = 'center'><?php echo $row['precio'] ?></td>
                                            <td align = 'center'><input type="number" name = "casa" id="<?php 'cadena'.$valor; ?>" placeholder="Cantidad" autofocus></td>
                                        </tr>
                                    <?php } $valor = $valor + 1;?>
                                                                        
                            </tbody>
                        </table>
                        <script>
                        
                            function imprimir() {
    
                                var v1 = document.getElementById('cantidad1');
                                document.write(v1);

                            }
                        </script>
                        <?php
                            echo $_POST['cantidad1'];
                            echo $_REQUEST['cantidad 1'];
                        ?>

                        <!--
                        <img src="img/yogurt.png" class="foto1"> 
                        <img src="img/leche.png" class="foto2">
                        
                        Botellas de yogurt de 2L
                        <form action="crear.php" method="POST">
                                    
                            <div class="form-gropu">
                                <input type="number" name="cantidad"
                                placeholder="Cantidad" autofocus>
                            </div>

                            <input type="hidden" 
                            name="cliente" value=<?php// $cliente ?>>

                            <input type="submit" class="boton1" 
                            name="guardar_producto" value="Yogurt">

                        </form>
                                    
                        <a href="index.php" class="boton2" >Leche</a>

                        <img src="img/kumis.png" class="foto3">

                        <a href="index.php" class="boton3" >Kumis</a>
-->
                </div>

            </div>

        </div>

    </div>

<?php
include("includes/footer.php");

?>