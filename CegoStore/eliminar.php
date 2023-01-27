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
                        <li><a href="index.php" >Menu Principal</a></li>
                        <li><a href="agregar.php" >Agregar</a></li>
                        <li><a href="eliminar.php" >Eliminar</a></li>
                        <li><a href="editar.php" target="principal">Editar</a></li>
                    </ul>            
                </nav>
            </div>
        </header>
        <div class="login_box" style="height: 380px;">
            <img class="avatar" src="img/login.png" alt="logo">
            <h1>Eliminar Producto</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="password">Id del producto</label>
                <input autocomplete="off" type="text" placeholder="Ingresa el Id del producto" name="campo3" required>
                <input id="crear" type="submit" value="Eliminar Producto" name="but">
            </form>
            <a href="index.php" style="font-size: 20px;">Atras</a>
            <?php
$a=false;
$a= @$_POST['but'];
include("db.php");
$con=conectar();
if($a){
    $id= @$_POST['campo3'];
    $sql = "DELETE FROM producto where id='$id'";
    $es = mysqli_query($con, $sql);
    if(!$es){
        echo "<h1 style='color: #000;'>Error</h1>";
    }else{
        echo "<h1 style='color: #000;'>Producto Eliminado</h1>";
    }  
}
?>
        </div>
    </body>
</html>

