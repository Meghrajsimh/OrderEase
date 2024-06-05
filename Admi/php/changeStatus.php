<?php 
    require("./connection.php");
    $tableId = $_GET['id'];
    $sql = "SELECT table_status FROM `dinetable` WHERE id = $tableId";
    $result = mysqli_query($connection, $sql);
    $row = $result->fetch_assoc();
    $updated = ($row['table_status'] == 'active')? "UPDATE `dinetable` SET `table_status`='deactive' WHERE id = $tableId":"UPDATE `dinetable` SET `table_status`='active' WHERE id = $tableId";
    echo $updated;
    if(mysqli_query($connection, $updated)) {
        header('location:tableManagement.php');
    }else {
        echo "Error";
    }
?>