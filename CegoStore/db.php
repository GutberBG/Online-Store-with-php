<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="cegostore";

    $con=mysqli_connect($server,$user,$pass, "cegostore");

    if($con->connect_error)
        die($con->connect_error);
    return $con;
}
?>