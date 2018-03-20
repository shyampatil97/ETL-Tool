<?php
// Create connection to Oracle
$conn = oci_connect("AKSHAY1", "1234", "//localhost/xe");
if ($conn) {
   
  #	 echo "connection succeded";
}
else {
   print "Connection failed!";
}
?>
<table border="1" cellspacing="0"><tr><th>Passenger</th>
				<th>Survived</th>
				<th>Pclass</th>
				<th>Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Sbip</th>
				<th>Parch</th>
				<th>Ticket</th>
				<th>Fare</th>
				<th>Cabin</th>
				<th>Embarked</th>			
				</tr>
<?php
 $stid = oci_parse($conn, 'SELECT Passenger,Survived,Pclass,Name,Sex,Age,Sbip,Parch,Ticket,Fare,Cabin,Embarked from Train ');
 oci_execute($stid);
 while(($row = oci_fetch_array($stid,OCI_BOTH)) != false){
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
oci_free_statement($stid);
// Close the Oracle connection
oci_close($conn);
?>
</table>