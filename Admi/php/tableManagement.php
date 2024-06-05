<?php
session_start();
if (isset($_SESSION['userName'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/adminDashbord.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/#tableManagement.css">
        <title>Table</title>

        <style>
            body {
                background-color: white;
            }

            #contentPlaceholder {
                position: absolute;
                top:30px;
                right: 150px;
                width: 60%;            }

            .innerDiv {
                padding: 0;
            }
            #scroll {
                height: 680px;
                scrollbar-width: none;
                overflow: auto;
            }
        </style>
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
                                    <a href="./menuManagement.php">
                                        <i class="bx bx-plus icons"></i>
                                        <span class="text nav-text">Menu Management</span>
                                    </a>
                                </li>
                                <br>
                                <li class="nav-link" id="tableManagementLink">
                                    <a href=""  class="active">
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
                <h1>Table Data</h1>
                <div id="contentPlaceholder">
                    <div class="innerDiv">
                        <div id="scroll">
                            <table class="table table-bordered table-hover" id="tableData">
                                <thead>
                                    <tr>
                                        <th>Table No.</th>
                                        <th> Table Size </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("./connection.php");

                                    $display = "SELECT * FROM `dinetable`";

                                    $sql = mysqli_query($connection, $display);
                                    $num = mysqli_num_rows($sql);
                                    if ($num != 0) {

                                        $number = 1;
                                        while ($row = $sql->fetch_assoc()) {
                                    ?>

                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['table_size'] ?></td>
                                                <td>
                                                    <?php if ($row['table_status'] == 'active') { ?>
                                                        <button class="btn btn-success" id='active<?php echo $row['id'] ?>' onclick="changeData(<?php echo $row['id'] ?>)">Active</button>
                                                    <?php } else { ?>
                                                        <button class="btn btn-danger" id='deactive<?php echo $row['id'] ?>' onclick="cleaningTime(<?php echo $row['id'] ?>)">Deactive</button><?php } ?>
                                                </td>

                                            </tr>
                                        <?php
                                        } ?>
                                </tbody>
                            <?php
                                    } else {
                                        echo "<h5>Number of row:$num</h5> ";
                                    }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
    <script src="../js/dineDataTable.js"></script>
    </html>
<?php
} else {
    echo "<script>alert('you are not login!!!')</script>";
    echo  "<script>location.href = 'admin.php'</script>";
}
$connection->close();
?>