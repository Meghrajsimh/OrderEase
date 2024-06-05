<?php 
    session_start();
    if(isset($_SESSION['userName'])) {
       session_unset();
       session_destroy();
       echo "<script>alert('your are log out succesfully')</script>";
       echo "<script>location.href = 'admin.php'</script>";
    }
?>