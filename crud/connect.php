<?php 
$connect = new mysqli("localhost","root","","php_crud_operation");

// if(!$connect){
//     die(mysqli_error($connect));
// }
 

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>