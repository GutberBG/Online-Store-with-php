<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>ABMs</title>
        <link href="css/master.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="stylehome.css" rel="stylesheet">
    </head>
    <body>
    <header class="header">
            <div class="container logo-nav-container">
                <a href="#" class="logo">CegoStore</a>
                <nav class="navigation">
                    <ul>
                        <li><a href="index.php">Menu Principal</a></li>
                        <li><a href="agregar.php">Agregar</a></li>
                        <li><a href="eliminar.php">Eliminar</a></li>
                        <li><a href="editar.php" target="principal">Editar</a></li>
                    </ul>            
                </nav>
            </div>
        </header>
        <div class="login_box" style="height: 650px;">
            <img class="avatar" src="img/login.png" alt="logo">
            <h1>Agregar Producto</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="username">Nombre del producto</label>
                <input autocomplete="off" type="text" placeholder="Ingresa el Nombre del producto" name="campo1" required>

                <label for="username">Precio del producto</label>
                <input autocomplete="off" type="text" placeholder="Ingresa el precio del producto" name="campo2" required>

                
                <label for="password">Id del producto</label>
                <input autocomplete="off" type="text" placeholder="Ingresa el Id del producto" name="campo3" required>

                <label for="password">Suba la imagen del producto</label>
                <input autocomplete="off" type="file" placeholder="Ingresa tu telefono" name="imagen" required>

                <input id="crear" type="submit" value="Agregar Producto" name="but">

            </form>
            <a href="index.php" style="font-size: 20px;">Atras</a>
            <?php
$a=false;
$a= @$_POST['but'];
include("db.php");
$con=conectar();
if($a){
    $ruta="imgprod";
$archivo=$_FILES['imagen']['tmp_name'];
$nombrearchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."/".$nombrearchivo);
    $ruta=$ruta."/".$nombrearchivo;
    $nom= @$_POST['campo1'];
    $pre= @$_POST['campo2'];
    $id= @$_POST['campo3'];
    $sql = "INSERT INTO producto (id, nombre, precio, imagen) VALUES ('$id', '$nom', '$pre', '$nombrearchivo')";
    $es = mysqli_query($con, $sql);
    if(!$es){
        echo "<h1 style='color: #000;'>Error</h1>";
    }else{
        echo "<h1 style='color: #000;'>Producto agregado</h1>";
    } 
}
?>
        </div>
    </body>
</html>

