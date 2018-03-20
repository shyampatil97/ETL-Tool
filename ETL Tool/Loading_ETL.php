<?php
	include 'Extract_ETL.php';
	$conn=mysqli_connect("localhost","root","","adbms");
	$query = "CREATE TABLE Load_table(
    mainid INT PRIMARY KEY AUTO_INCREMENT,
    Passenger INT(20),
    Name VARCHAR(100),
    Gender VARCHAR(30),
    Age INT(20),
    Category INT(20),
    Ticket VARCHAR(70),
    Embarked VARCHAR(30)
)";
 $result=mysqli_query($conn,$query);
 for($i=0;$i<$c;$i++)
 {
 	$queryins="INSERT into Load_table(Passenger,Name,Gender,Age,Category,Ticket,Embarked) VALUES('$Passenger[$i]','$Name[$i]','$Gender[$i]','$Age[$i]','$Category[$i]','$Ticket[$i]','$Embarked[$i]')";
 	$result=mysqli_query($conn,$queryins);
 }
$querydisp="SELECT * from Load_table";
$result2=mysqli_query($conn,$querydisp);
?>
<table border="1" cellspacing="0"><tr><th>Main_Id</th>
						<th>Passenger</th>
						<th>Name</th>
						<th>Sex</th>
						<th>Age</th>										
						<th>Category</th>
						<th>Ticket</th>									
						<th>Embarked</th>			
						</tr>
 <?php
   while($row = mysqli_fetch_array($result2))
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
 	</tr>
 	<?php
   }
   mysqli_close($conn);
   ?>
   </table>
