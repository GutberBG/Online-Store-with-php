<!DOCTYPE html>
<html lang="es">
    <head>
        <title>CegoStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styleprod.css" rel="stylesheet">
        <link href="banner.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body id="conten">
        <header class="header">
            <div class="container logo-nav-container">
                <a href="#" class="logo">CegoStore</a>
                <nav class="navigation">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="ofertas.php">Ofertas</a></li>
                        <li><a href="contactos.php">Contactos</a></li>
                        <li><a href="acerca.php">Acerca de nosotros</a></li>
                        <li><a href="login.php"><img src="img/login.png" style="width: 50px; height: 50px;"></a></li>
                    </ul>            
                </nav>
            </div>
        </header>

        <main class="main">
            <div class="banner"></div>
            <div class="container1">
                <h1>Nuestros Productos</h1>
            </div>
            <form id="myform">
<?php
include("db.php");
$con=conectar();
$sql = "SELECT * FROM producto";
$es = mysqli_query($con, $sql);
    if(!$es){
        echo "error";
    }else{
        while($mostrar=mysqli_fetch_array($es)){
            $nombre=$mostrar['nombre'];
            $precio=$mostrar['precio'];
            $imagen=$mostrar['imagen'];
            echo "<div class='publi'>
            <img class='animacion' src='imgprod/$imagen'>
            <br>
            <div class='ofer'>$nombre<br><h5>Precio: $precio$</h5><input type='submit' value='Comprar' name=></div>  
        </div>";

        }
    }
?>
</form>
            
            <div style="background: rgba(255, 254, 254, 0.103); height: 50px; width: 50px; clear: both;">
                
            </div>
       <footer>
       <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Mas informacion de la tienda</h1>
                    <p>Esta tienda se dedica a la venta de productos con una 
                    calidad superior, intentando siempre llegar a su hogar, con promociones y mucho mas.</p>
                </div>
                <div class="colum2">
                    <h1>Redes Sociales</h1>
                    <div class="row">
                        <img src="icon/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img src="icon/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <img src="icon/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
                        <img src="icon/google-plus.png">
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="row">
                        <img src="icon/pinterest.png">
                        <label>Siguenos en Pinteres</label>
                    </div>
                </div>
                <div class="colum3">
                    <h1>Informacion Contactos</h1>
                    <div class="row2">
                        <img src="icon/house.png">
                        <label>Av. Kantutas, Bolivia La Paz- El Alto</label>
                    </div>
                    <div class="row2">
                        <img src="icon/smartphone.png">
                        <label>78951433</label>
                    </div>
                    <div class="row2">
                        <img src="icon/contact.png">
                         <label>CegoStore@gmail.com</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href="">WebKit</a>
                    </div>
                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>
            </div>     
    </footer>
    </body>
</html>