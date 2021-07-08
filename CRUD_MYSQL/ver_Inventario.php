<!--<?php

include("db.php")

?>-->

<?php include("includes/header.php")?>

<!--<body style="background-color: #289EE6;">-->

<br>
    <br>
    <h1 align ='center'>Supermercado PHP</h1>
    <h2 align ='center'>Bienvenido</h2>

    <br>
    <h3 align ='center'>Inventario existente:</h3>

    <div class= "container p-4">

        <div class= "row">
            
            <div class= "container-md-8">

                <div class="card card-body">

                        <table class="table table-bordered">
                            <thead>
                                <th style="text-align:center;">Id Producto</th>
                                <th style="text-align:center;">Producto</th>
                                <th style="text-align:center;">Cantidad</th>
                                <th style="text-align:center;">Lote</th>
                                <th style="text-align:center;">Fecha de vencimiento</th>
                                <th style="text-align:center;">Precio</th>                                

                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT id, producto, cantidad, lote, fecha_vencimiento, precio from productos";
                                    $resul_productos=mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($resul_productos)){?>
                                        <tr>
                                            <td align = 'center'><?php echo $row['id'] ?></td>
                                            <td align = 'center'><?php echo $row['producto'] ?></td>
                                            <td align = 'center'><?php echo $row['cantidad'] ?></td>
                                            <td align = 'center'><?php echo $row['lote'] ?></td>
                                            <td align = 'center'><?php echo $row['fecha_vencimiento'] ?></td>
                                            <td align = 'center'><?php echo $row['precio'] ?></td>
                                        </tr>
                                    <?php } ?>

                                
                            </tbody>
                        </table>
                        
                        <a href="index.php" class="nav-link active">Regresar al inicio</a>
                </div>

            </div>

        </div>

    </div>

<?php include("includes/footer.php")?>