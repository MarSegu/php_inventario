<?php include("db.php")?>

<?php include("includes/header.php")?>

<!--<body style="background-color: #B4E829;">-->
<?php if(isset($_SESSION['message'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset(); } ?>


    <br>
    <br>
    <h1 align ='center' class="text-primary">Supermercado PHP</h1>
    <h2 align ='center'>Bienvenido</h2>

    <h3 align ='center'>Seleccione una de las siguientes opciones:</h3>
    
    <br>
    <br>
    <h3 align ='center'>Es usted:</h3>

    <div align ='center'>
        <a href="proveedor.php" >Proveedor</a>
        <br>
        <a href="cliente.php" >Cliente</a>
        <br>
        <br>
    </div>
    <h3 align ='center' >Acciones definidas:</h3>
    <div align ='center'>
        <a href="ver_inventario.php" >Mostrar inventario</a>
        <br>
        <a href="devolucion.php">Devolución</a>
    </div>

<?php include("includes/footer.php")?>