<?php
ob_start();
?>
<?php


include('db_conn.php');

// SQL query to select data from database
$sql = "SELECT * FROM health_record ORDER BY ID DESC";

$result = $conn->query($sql);
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Health Record</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #722F37;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #dbdbd9;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Patient Health Record</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
	
				<th>Reg No</th>
				<th>BPM</th>
				<th>SpO2</th>
				<th>Body Temp</th>
				<th>Time</th>
                                <th>Date</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['patient_reg_no'];?></td>
				<td><?php echo $rows['BPM'];?></td>
				<td><?php echo $rows['SpO2'];?></td>
				<td><?php echo $rows['body_temp'];?></td>
				<td><?php echo $rows['time'];?></td>
				<td><?php echo $rows['date'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
