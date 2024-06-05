<?php 
    require("./connection.php");
    $itemId = $_GET['id'];
    $delete = "DELETE FROM `fooditems` WHERE id = $itemId ";

    $sql = mysqli_query($connection,$delete);

    if(!$sql) {
        echo $connection->error ;
    }else {
        header('location:adminDashbord.php');
    }
?>