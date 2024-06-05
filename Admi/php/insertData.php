<?php 
    require("connection.php");
    // error_reporting(0);
    $foodName = $_POST['foodName'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $time = $_POST['time'];
    $type = $_POST['category'];
    $image = $_FILES['foodImage']['name'];
 
    if(move_uploaded_file($_FILES['foodImage']['tmp_name'],'../../Images/'.basename($_FILES['foodImage']['name']))) {

        $sql = "INSERT INTO `fooditems` (`food_name`,`description`,`price`,`time`,
                              `images`,`category`) 
                        VALUES ('$foodName','$desc',$price,$time,'$image','$type')";
        $result = mysqli_query($connection, $sql);
        if($result) {
            echo "<script>alert('add');</script>";
            echo "<script>location.href = 'adminDashbord.php'</script>";
        } else {
            echo "<script>alert('errorr');</script>";
        }
    }else {
        echo "file not found";
    }
  
 
    
  
?>
