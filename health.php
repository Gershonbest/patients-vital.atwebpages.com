<?php



   $host = "fdb34.awardspace.net";		    // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "4125027_vital";              // Database name
    $username = "4125027_vital";		    // Database username
    $password = "yoRM(*6J92IUR6Vk";	        // Database password


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. "; }

   
// Get date and time variables
    date_default_timezone_set('EET');  // for other timezones, refer:- https://www.php.net/manual/en/timezones.asia.php
    $d = date("Y-m-d");
    $t = date("H:i:s");
    
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POST['patient_reg_no']) && !empty($_POST['BPM']) && !empty($_POST['SpO2']) && !empty($_POST['temp']) )
    {
    if(($_POST['patient_reg_no']) !="0.0" && ($_POST['BPM']) !="0.0" && ($_POST['SpO2']) !="0.0" && ($_POST['temp']) != "0.0"){
		$patient_reg_no = $_POST['patient_reg_no'];
                $BPM = $_POST['BPM'];
                         $SpO2=$_POST['SpO2'];
                                $temp=$_POST['temp'];


// Update your tablename here
	        $sql = "INSERT INTO health_record (patient_reg_no, BPM, SpO2, body_temp, time, date) VALUES ('".$patient_reg_no."','".$BPM."','".$SpO2."','".$temp."', '".$t."', '".$d."')"; 
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
             
	}
        }


// Close MySQL connection
$conn->close();



?>