<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>ABMs</title>
        <link href="css/master.css" rel="stylesheet">
    </head>
    <body>
        <div class="login_box" style="height: 400px;">
            <img class="avatar" src="img/login.png" alt="logo">
            <h1>Login</h1>
            <form>
                <label for="username">Username</label>
                <input autocomplete="off" type="text" placeholder="Enter Username" name="campo1" required>


                <label for="password">Password</label>
                <input autocomplete="off" type="password" placeholder="Enter Password" name="campo2" required>

                <input type="submit" value="Log In" name="but">

                <a href="index.php" style="font-size: 20px;">Atras</a>
            </form>
        </div>
    </body>
</html>
<?php
$a=false;
$a= @$_GET['but'];
include("db.php");
$con=conectar();
$sql = "SELECT * FROM usuario";
$es = mysqli_query($con, $sql);
$b="";
$c="";
if($a){
    $b= @$_GET['campo1'];
    $c= @$_GET['campo2'];
    if(!$es){
        echo "error";
    }else{
        while($mostrar=mysqli_fetch_array($es)){
            if($mostrar['nombre']==$b and $mostrar['clave']==$c){
                header('Location: agregar.php');
                break;
            }else{    
                echo "<h3> Usuario o contraseña incorrectas </h3>";
            }
        }
    }  
}
?>