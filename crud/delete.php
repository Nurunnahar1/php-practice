<?php  
include("connect.php");
if(isset($_GET["deleteid"])){

    $id = $_GET["deleteid"];
    $sql = "DELETE FROM `crud` WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }
    else{
        die("Query error: " . mysqli_error($connect));
    }
}
?>