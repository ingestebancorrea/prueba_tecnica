<?php
$connection_obj = mysqli_connect("localhost", "root", "", "prueba_tec");
 
if (!$connection_obj) {
    echo "Error No: " . mysqli_connect_errno();
    echo "Error Description: " . mysqli_connect_error();
    exit;
}
?>