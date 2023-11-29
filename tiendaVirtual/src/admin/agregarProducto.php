<?php
include('../../config/config.php');
include('../../config/connection.php');
include('./../templates/cabecera.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Admin</title>
</head>
<body>
    <section class="section-menu">
        <section class="contenido">
        <h2>Agregar producto</h2>
        <?php 
        $sentencia = $pdo->prepare("SELECT * FROM categoria");
        $sentencia->execute();
        $listaCategoria=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        ?>
        
       
    <form action="../carritoProducto.php" method="post">
        <label for="nombreProducto">producto</label>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="nombre"  name="nombreProducto" id="nombreProducto" aria-label="nombreProducto" aria-describedby="basic-addon1">
        </div>

        <label for="categoriaProducto">categoria</label>
        <select class="form-select" id="categoriaProducto" name="categoriaProducto" aria-label="Default select example">
            <option selected>categoria</option>
            <?php
            $conta = 0; // Agregamos la inicialización de $conta
            foreach ($listaCategoria as $categoria) {
                $conta += 1; // Añadimos el punto y coma
            ?>
                <option value="<?php echo $conta; ?>"><?php echo $categoria['nombre']; ?></option>
            <?php } ?>
        </select>
        <br>
        
        <label for="precioProducto">precio (CL)</label>
       
        <input type="text"  name="precioProducto" id="precioProducto"class="form-control" aria-label="Amount (to the nearest dollar)">
       
        <br>

        <label for="descripcionProducto">descripción</label>
        <div class="input-group">
        <span class="input-group-text">Descripción</span>
        <textarea class="form-control" name="descripcionProducto" id="descripcionProducto" aria-label="With textarea"></textarea>
        </div>

        <button 
        class="btn btn-primary" 
        name="btnAccion"
        value="AgregarProducto"
        type="submit" >
        agregar producto
        </button>
    </form>
    
    </section>
    </section>
    
    
</body>
</html>