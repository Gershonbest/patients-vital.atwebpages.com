<?php
    
   
    
    include_once 'db_conn.php';
 
    $sql = "DELETE FROM `attendance_sheet` WHERE id='" . $_GET["data"] . "'";
    echo $_GET["data"];

    
 
    if (mysqli_query($conn, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    
    mysqli_close($conn);
?>