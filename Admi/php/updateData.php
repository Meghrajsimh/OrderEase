<?php 
    require("./connection.php");
        $itemId = $_GET['id'];
         $foodName = $_POST['foodName'];
         $desc = $_POST['description'];
         $price = $_POST['price'];
         $time = $_POST['time'];
         $type = $_POST['category'];
         $image = $_FILES['foodImage']['name'];
    
         if(move_uploaded_file($_FILES['foodImage']['tmp_name'],'../../Images/'.basename($_FILES['foodImage']['name']))) {

            $sql = "UPDATE `fooditems` SET `food_name` = '$foodName' ,`description`='$desc', `price` = $price, `time` = $time, 
            `images` = '$image', `category` = '$type'
               WHERE id = $itemId ";
            $result = mysqli_query($connection, $sql);
            if($result) {
                echo "<script>alert('update data succes');</script>";
                echo "<script>location.href = 'adminDashbord.php'</script>";
            } else {
                echo "<script>alert('errorr');</script>";
            }
        }else {
            echo "file not found";
        }
    ?>