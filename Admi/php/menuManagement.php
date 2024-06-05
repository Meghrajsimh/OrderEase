<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/menu_management.css">
    <link rel="stylesheet" href="../css/adminDashbord.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="conationer">
        <div class="left">
            <nav class="sidebar">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <a href="adminDashbord.php">
                                <img src="https://t4.ftcdn.net/jpg/04/06/91/91/240_F_406919147_D3WsGjwXj1qmFNrei2ZFvBWwiueRcFmg.jpg" alt="logo" /></a>
                        </span>
                        <div class="text header-text">
                            <span class="main">Admin</span>
                        </div>
                    </div>
                    <br>
                    <!-- <button class="toggle"><i class="bx bx-chevron-right hov"></i></button> -->
                </header>
                <div class="menu-bar">
                    <div class="menu">
                        <ul class="menu-links">
                            <li class="nav-link" id="orderManagementLink">
                                <a href="./order_mangement.php">
                                    <i class="bx bx-home-alt icons"></i>
                                    <span class="text nav-text">Order Management</span>
                                </a>
                            </li>
                            <br>
                            <li class="nav-link" id="menuManagementLink">
                                <a href="" class="active">
                                    <i class="bx bx-plus icons"></i>
                                    <span class="text nav-text">Menu Management</span>
                                </a>
                            </li>
                            <br>
                            <li class="nav-link" id="tableManagementLink">
                                <a href="./tableManagement.php">
                                    <i class='bx bx-table icons'></i>
                                    <span class="text nav-text">Table Management</span>
                                </a>
                            </li>
                            <br>
                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="nav-link">
                            <a href="logOut.php">
                                <i class="bx bx-log-out icons"></i>
                                <span class="text nav-text">Log Out</span>
                            </a>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="right">
            <div class="form-container" id="form">
                <h2>Add New Food</h2>
                <div class="foodform">
                    <form id="addFoodForm" action="insertData.php" method="post" enctype="multipart/form-data">
                        <label for="foodName">Food Name:<span>*</span></label>
                        <input type="text" id="foodName" class="form-control" placeholder="food name" name="foodName" required>

                        <label for="description">Description:<span>*</span></label>
                        <textarea id="description" class="form-control" name="description" placeholder="food Info"  required></textarea>

                        <label for="foodcategory">Category<span>*</span></label>
                        <select name="category" id="category" class="form-control"  required>
                            <option value="">select</option>
                            <?php
                            require("./connection.php");
                            $display = "SELECT name FROM `category` ";

                            $sql = mysqli_query($connection, $display);
                            if ($sql) {
                                $num = mysqli_num_rows($sql);
                                if ($num > 0) {
                                    while ($row = $sql->fetch_assoc()) {
                            ?>
                                        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>

                            <?php
                                    }
                                }
                            } else {
                                echo "<h1>erorr</h1>";
                            }
                            ?>
                        </select>


                        <label for="price">Price:<span>*</span></label>
                        <input type="number" id="price" class="form-control" name="price" min="0" placeholder="food price" step="0.01"  required>
                        <label for="time">Time:<span>*</span></label>
                        <input type="number" id="time" class="form-control" name="time" placeholder="only in minute" min="0" step="0.01"  required>

                        <label for="foodIamge">Food Images:<span>*</span></label>
                        <input type="file" name="foodImage" id="foodImage"  required>

                        <button class="btn btn-primary" type="submit" id="addFood">Add Food</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>