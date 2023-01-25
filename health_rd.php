<?php
ob_start();
?>

<?php


include("db_conn.php");


// Select values from MySQL database table

$sql = "SELECT id, patient_reg_no, BPM, SpO2, body_temp, time, date FROM health_record";  // Update your tablename here

$result = $conn->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


   // output data of each row
    //while($row = $result->fetch_assoc()) {
    //  echo "<strong> Id:</strong> " . $row["id"]. " &nbsp <strong>Val1:</strong> " . $row["val1"]. " &nbsp <strong>Val2:</strong> " . $row["val2"]. " &nbsp <strong>Date:</strong> " . $row["date"]." &nbsp <strong>Time:</strong>" .$row["time"]. "<p>";
        
    while($row = $result->fetch_assoc()) {
        echo "<strong> ID:</strong> " . $row["id"]. " &nbsp <strong>Reg No:</strong> " . $row["patient_reg_no"]. " &nbsp <strong>BPM:</strong> " . $row["BPM"]. " &nbsp <strong>SpO2:</strong> " . $row["SpO2"]. " &nbsp <strong>Body Temp:</strong> " . $row["body_temp"]." &nbsp <strong>Time:</strong>" .$row["time"]. " &nbsp <strong>Date:</strong>" .$row["date"]. "<p>";
    


}
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>