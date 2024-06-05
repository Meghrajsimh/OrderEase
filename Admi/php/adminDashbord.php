<?php  
  session_start();
  if(isset($_SESSION['userName'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="../css/adminDashbord.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Add Bootstrap JS (jQuery is required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
   
    #contentPlaceholder {
      height: 100%;
      width: 83%;
      margin-left: 16em;
     
    }

    .innerDiv{
      padding: 0;
      margin: 0px 10px;
    }
    #scroll {
      border-radius: 10px;
      padding: 10px;
      position: relative;
      top: 60px;
    }
    </style>
</head>

<body class="dark">
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
            <span class="text nav-text" >Log Out</span>
          </a>
        </li>
      </div>
    </div>
  </nav>

  <main>
    <div id="contentPlaceholder">
      <div class="innerDiv" >
        <div id="scroll">
          <table class="table table-bordered table-hover " id="userData">
            <thead>
              <tr>
                <th>No.</th>
                <th> Name </th>
                <th> Description </th>
                <th> Price </th>
                <th> Time </th>
                <th>Image</th>
                <th> Category </th>
                <th> Delete </th>
                <th> Update </th>
              </tr>
            </thead>
            <tbody>
              <?php
              require("./connection.php");

              $display = "SELECT * FROM `fooditems`";

              $sql = mysqli_query($connection, $display);
              $num = mysqli_num_rows($sql);
              if ($num != 0) {

                $number = 1;
                while ($row = $sql->fetch_assoc()) {
              ?>

                  <tr>
                    <td><?php echo $number ?></td>
                    <td><?php echo $row['food_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><img id="iamge" style=" width: 150px;  height:101px" src="<?php echo '../../Images/' . $row['images'] ?>" alt="iamges"></td>
                    <td><?php echo $row['category'] ?></td>

                    <td><button class="btn btn-danger"><a style="color:white" href="deleteData.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
                    <td><button class="btn btn-primary"><a style="color:white" href="updateForm.php?id=<?php echo $row['id']; ?>">Update</a></button></td>
                  </tr>

                  <?php $number++; ?>

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
  </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script src="adminDashbord.js"></script>
<script src="dataTable.js"></script>
<script src="validation.js"></script>
<script src="dineDataTable.js"></script>
</html>

<?php 
  }else {
    echo "<script>alert('you are not login!!!')</script>";
    echo  "<script>location.href = 'admin.php'</script>";
  }
$connection->close();
?>