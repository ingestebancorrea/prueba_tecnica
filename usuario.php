<?php
//Determinar cual boton esta presionando el usuario, isset determina si una variable esta definida
if(isset($_POST["registrar"])){
    $op=$_POST["registrar"];
}

switch($op){
    case 1:
        insertarbd(); 
        break;/*Forzar detencción del programa*/
?>

function insertarbd(){
    include("conexiondb.php");

    $c = $_POST["cedula"]; 
    $n = $_POST["nombre"];
    $c = $_POST["contraseña"];
    $e = $_POST["email"];
    $t = $_POST["tipo"];
    $co = $_POST["comentario"];
     
    // prepare the insert query
    $query = "INSERT INTO (`cedula`, `nombre`, `contraseña`, `email`, `tipoUsuario`, `comentario`)
    VALUES ('". mysqli_real_escape_string($connection_obj, $c) ."','". mysqli_real_escape_string($connection_obj, $n) ."','". mysqli_real_escape_string($connection_obj, $c) ."','". mysqli_real_escape_string($connection_obj, $e) ."','". mysqli_real_escape_string($connection_obj, $t) ."','". mysqli_real_escape_string($connection_obj, $co) ."')";
     
    // run the insert query
    $result=mysqli_query($connection_obj, $query);
    if ($result==1){
        echo "Usuario insertado";
    }else{
        echo "Error al insertar";
    }
    
    // close the db connection
    mysqli_close($connection_obj);
}