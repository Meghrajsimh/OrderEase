<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script defer src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <style>
       body {
           background: url("../../Images/adminL.jpg") no-repeat;
}
        .error {
            color: red;
            font-size: smaller;
            display: block;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class=" container mt-5 ">
            <h1> Log In </h1>
            <form id="loginForm" action="#" method="post">
                <div id="data">
                    <label for="firstName">Name<span>*</span></label>
                    <input type="text" class="form-control" placeholder="your name" name="username" id="name" autofocus>
                    <label for="description">password<span>*</span></label>
                    <input id="pass" name="password" type="password" placeholder="password" class="form-control"></input>
                </div>
                <button id="submit"  class="btn btn-dark" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="validation.js"></script>

</html>

<?php

error_reporting(0);
$userName = $_POST['username'];
$pass = md5($_POST['password']);

if($pass != '' && $userName != '') {
    if ($pass == '0192023a7bbd73250516f069df18b500' && $userName == 'admin') {
        session_start();
        $_SESSION['userName'] = $userName;
        $_SESSION['password'] = $pass;
        echo "<script>location.href = 'adminDashbord.php'</script>";
    }
    else {
       echo '<script>
       document.addEventListener("DOMContentLoaded", function() {
       Toastify({
       text: "Wrong password and username",
       className: "info",
       style: {
       background: "linear-gradient(to right, #eab676e6, #eab676e6)",
       color: "#00000"
       }}).showToast();
       });</script>';
    }
}else {

}


?>