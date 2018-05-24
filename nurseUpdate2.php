<?php
	
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("family",$db) or die (mysql_error());
	
	$v=$_POST['name'];
	$w=$_POST['ic'];//dari nama form
	$x=$_POST['noStaff'];//dari nama form
	$y=$_POST['password'];//dari nama form
	$z=$_POST['noPhone'];//dari nama form
	$u=$_POST['clinicId'];//dari nama form
	                      	
	if(isset($_POST['noStaff'])){//dari nama form
		$strSQL = "UPDATE nurse
		SET nameNurse='$v', icNurse='$w', pass='$y', NursePhoneNo='$z', clinicId='$u'
		WHERE noStaff='$x'";
		$result=mysql_query($strSQL,$db)
				or die(mysql_error());
		
	}
	 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	header('Location:home.php');
?>