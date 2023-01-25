<?php
ob_start();
?>
<?php
//login.php

include("db_conn.php");
$message = " ";
$message1 = " ";


session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin_a"]) && $_SESSION["loggedin_a"] === true){
  header("location: searchbycourse.php");
  exit;
}


if(isset($_POST["submit"]))
{
    $patient_reg_no = $_POST['patient_reg_no'];


    $sql="SELECT * FROM patients WHERE patient_id ='$patient_reg_no'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_array($result)) {
				
                
				if($_POST["patient_reg_no"] == $row["patient_id"])
				{
                    session_start();
                    $_SESSION["loggedin_a"] = true;
                    $_SESSION["uin_a"] = $row['unique_id'];
                    $_SESSION["id_a"] = $row['id'];
                
                   


					header("location:searchbycourse.php");
				}
				else
				{
                    $message = "wrong Password";
                    echo "<script>alert('$message ')
     location.href='login.php'</script>";
        
          
				}
			
			
		
            }
        }
        else{
            $message1 = " Not a registered Patient";
            echo "<script>alert('$message1 ')
            location.href='login.php'</script>";
    }
	
        }
        mysqli_close($conn);
?>