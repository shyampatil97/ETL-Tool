<?php
	include 'Extract_ETL.php';
	for($i=0;$i<$c;$i++)
	{
		if($Gender[$i]=="male"||$Gender[$i]=="Male")
			$Gender[$i]="M";
		if($Gender[$i]=="female"||$Gender[$i]=="Female")
			$Gender[$i]="F";
		if($Age[$i]>0 && $Age[$i]<=12)
			$Age[$i]="Child";
		if($Age[$i]>12 && $Age[$i]<18)
			$Age[$i]="Teenager";
		if($Age[$i]>=18 && $Age[$i]<45 || $Age[$i]=="" || $Age[$i]=="NULL")
			$Age[$i]="Adult";
		if($Age[$i]>=45 && $Age[$i]<100 )
			$Age[$i]="Elderly";
		if($Embarked[$i]=="S")
			$Embarked[$i]="San Francisco";
		if($Embarked[$i]=="Q")
			$Embarked[$i]="Quinton";
		if($Embarked[$i]=="C")
			$Embarked[$i]="California";
	}

?>