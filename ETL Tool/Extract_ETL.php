<?php
 $conn=mysqli_connect("localhost","root","","adbms");
 $query="select * from train";
 $result=mysqli_query($conn,$query);
 $c=0;
 while($row=mysqli_fetch_array($result))
 {
 	$Passenger[$c]=$row['Passenger'];
 	$Name[$c]=$row['Name'];
 	$Gender[$c]=$row['Sex'];
 	$Age[$c]=$row['Age'];
 	$Category[$c]=$row['Category'];
 	$Ticket[$c]=$row['Ticket'];
 	$Embarked[$c]=$row['Embarked'];
 	$c=$c+1;
 }
 mysqli_close($conn);
 //csv file
 $file = fopen("train_db.csv","r");
  while(!feof($file))
  {
  	$data = fgetcsv($file,100,",");
  	$arr=$data;
    $Passenger[$c]=$arr[0];
 	@$Name[$c]=$arr[3];
 	@$Gender[$c]=$arr[4];
 	@$Age[$c]=$arr[5];
 	@$Category[$c]=$arr[7];
 	@$Ticket[$c]=$arr[8];
 	@$Embarked[$c]=$arr[11];
 	$c=$c+1;
    }
    fclose($file);
    //Oracle
   $conn = oci_connect("AKSHAY1", "1234", "//localhost/xe");
	if ($conn) {
    #echo "connection succeded";
	}
	$stid = oci_parse($conn, 'SELECT * from Train ');
 	oci_execute($stid);
 	while(($row1 = oci_fetch_array($stid,OCI_BOTH)) != false)
 	{
 	$Passenger[$c]=$row1[0];
 	$Name[$c]=$row1[3];
 	$Gender[$c]=$row1[4];
 	$Age[$c]=$row1[5];
 	$Category[$c]=$row1[7];
 	$Ticket[$c]=$row1[8];
 	$Embarked[$c]=$row1[11];
 	$c=$c+1;
 	}
 	oci_close($conn); 
?>