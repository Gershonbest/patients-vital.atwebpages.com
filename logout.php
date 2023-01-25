<?php
include('db_conn.php');
session_start();
unset($_SESSION["loggedin_a"]);
unset($_SESSION["id_a"]);


echo "<script>alert('You have successfully logged out of IOT health system')
     location.href='login.php'</script>";
        

 






?>