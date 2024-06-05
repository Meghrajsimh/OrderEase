<?php
require("./connection.php");
$itemId = $_GET['id'];
$data = "SELECT * FROM `fooditems` WHERE id= $itemId";
$sql = mysqli_query($connection, $data);
$row = $sql->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/menu_management.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            background: url('../../Images/updateL.jpg');
        }
        #form {
            margin: 20px 0px;
            position: absolute;
            top: 5px;
            left: 57em;
            background-color: #fff;
            opacity: 0.8;
            padding: 15px;
            border-radius: 15px;
        }

        #scroll {
            height: 550px;
            overflow: auto;
            scrollbar-width: none;
            position: relative;
            z-index: 5;
        }

    </style>
</head>

<body class="dark">
    <div class="form-container">
        <div id="form">
            <h2>Update Food</h2>
            <div class="foodform" id="scroll">
                <form id="addFoodForm" action="updateData.php?id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
                    <label for="foodName">Food Name:<span>*</span></label>
                    <input type="text" id="foodName" class="form-control" placeholder="food name" name="foodName" value="<?php echo $row['food_name'] ?>"  required>

                    <label for="description">Description:<span>*</span></label>
                    <textarea id="description" class="form-control" name="description" placeholder="food Info"  required><?php echo $row['description'] ?></textarea>

                    <label for="foodcategory">Category<span>*</span></label>
                    <select name="category" id="category" class="form-control"  required>
                        <option value=""><?php echo $row['category'] ?></option>
                        <?php
                        $display = "SELECT name FROM `category` ";

                        $sql = mysqli_query($connection, $display);
                        if ($sql) {
                            $num = mysqli_num_rows($sql);
                            if ($num > 0) {
                                while ($rowOne = $sql->fetch_assoc()) {
                        ?>
                                    <option value="<?php echo $rowOne['name'] ?>"><?php echo $rowOne['name'] ?></option>

                        <?php
                                }
                            }
                        } else {
                            echo "<h1>erorr</h1>";
                        }
                        ?>
                    </select>

                    <label for="price">Price:<span>*</span></label>
                    <input type="number" id="price" class="form-control" name="price" placeholder="food price" value="<?php echo $row['price'] ?>"  required>
                    <label for="time">Time:<span>*</span></label>
                    <input type="number" id="time" class="form-control" name="time" placeholder="only in minute" value="<?php echo $row["time"]; ?>"  required>

                    <label for="foodIamge">Food Iamges:<span>*</span></label>
                    <img src="<?php echo "../../Images/" . $row['images'] ?> " alt="iamges" width="200px" height="200px" />
                    <input type="file" name="foodImage" id="foodImage"  required>
                    </div>
                    <button class="btn btn-primary" type="submit" id="addFood" style="margin-left: 110px;">update Food</button>
                </form>
            </div>
        
    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</html>