<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<?php
 	$db_host = "localhost";
 	$db_username = "root";
 	$db_password = "";
 	$db_name = "adbms";

 	$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
 	if(!$conn)
	{
	die("unable to connect");
	}
	else
	{
			 #echo "connection succeded";
 	
   // echo $row1["id"].' '.$row1["fname"].' '.$row1["lname"].' '.$row1["dob"];
 	}	?>
 	<table border="1" cellspacing="0"><tr><th>Passenger</th>
				<th>Survived</th>
				<th>Pclass</th>
				<th>Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Sbip</th>
				<th>Category</th>
				<th>Ticket</th>
				<th>Fare</th>
				<th>Cabin</th>
				<th>Embarked</th>			
				</tr>

 	<?php
 	$query1 = "SELECT * from train ";
 	$result1 = mysqli_query($conn,$query1);
 #	$row = mysqli_fetch_array($result1);
 	
 	while($row = mysqli_fetch_array($result1))
 	 {
 	 	?>
 	 	<tr>
 	<td><?php echo $row[0] ?> </td>
 	<td><?php echo $row[1] ?></td>
 	<td><?php echo $row[2] ?></td>
 	<td><?php echo $row[3] ?></td>
 	<td><?php echo $row[4] ?></td>
 	<td><?php echo $row[5] ?></td>
 	<td><?php echo $row[6] ?></td>
 	<td><?php echo $row[7] ?></td>
 	<td><?php echo $row[8] ?></td>
 	<td><?php echo $row[9] ?></td>
 	<td><?php echo $row[10] ?></td>
 	<td><?php echo $row[11] ?></td>
 		</tr>
 		<?php
 	 }
 	 mysqli_close($conn);
	
 	?>

 </table>

</body>
</html>