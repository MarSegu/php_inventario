<?php include("includes/header.php")?>

<!--<body style="background-color: #289EE6;">-->
<?php session_unset(); ?>
<br>
    <br>
    <h1 align ='center'>Supermercado PHP</h1>
    <h2 align ='center'>Bienvenido Cliente</h2>
    <h2 align ='center'>Pensamos en usted</h2>

    <br>
    <br>
    <h3 align ='center'>Información cliente:</h3>


    <div class= "container p-4">

        <div class= "row">
            
            <div class= "container-md-8">

                <div class="card card-body">

                    <form action="crear.php" method="POST">

                        <div class="form-gropu">
                            <input type="text" name="cliente" class="form-control" 
                            placeholder="cliente" autofocus>
                        </div>
                    
                        <br>
                        <input type="submit" class="btn btn-seccess btn-block" 
                        name="enviar_cliente" value="Enviar cliente">

                    </form>

                    </div>

                </div>

            <div class="col md-8">
            
            
            </div>

        </div>

    </div>

<?php include("includes/footer.php")?>