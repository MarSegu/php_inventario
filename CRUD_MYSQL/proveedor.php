<?php include("includes/header.php")?>

<!--<body style="background-color: #E67E28;">-->

<br>
    <br>
    <h1 align ='center'>Supermercado PHP</h1>
    <h2 align ='center'>Bienvenido Proveedor</h2>

    <br>
    <br>
    <h3 align ='center'>Entrega de productos:</h3>

    <div class= "container p-4">

        <div class= "row">
            
            <div class= "container-md-4">

                <div class="card card-body">

                    <form action="crear.php" method="POST">

                        <div class="form-gropu">
                            <input type="text" name="producto" class="form-control" 
                            placeholder="Producto" autofocus>
                        </div>

                        <div class="form-gropu">
                            <input type="number" name="cantidad" class="form-control" 
                            placeholder="Cantidad" autofocus>
                        </div>

                        <div class="form-gropu">
                            <input type="number" name="lote" class="form-control" 
                            placeholder="Lote" autofocus>
                        </div>

                        <div class="form-gropu">
                            <input type="date" name="fecha_ven" class="form-control" 
                            placeholder="Fecha de vencimiento" autofocus>
                        </div>

                        <div class="form-gropu">
                            <input type="float" name="precio" class="form-control" 
                            placeholder="Precio" autofocus>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-seccess btn-block" 
                        name="guardar_producto" value="Guardar producto">

                    </form>
                
                </div>

            </div>

            <div class="col md-8">
            
            
            </div>

        </div>

    </div>

<?php include("includes/footer.php")?>
