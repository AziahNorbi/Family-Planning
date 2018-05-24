<?php
	
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("family",$db) or die (mysql_error());
	
	$u=$_POST['noStaff'];
	$v=$_POST['status'];
	$w=$_POST['icMother'];//dari nama form
	$y=$_POST['dateRecommend'];//dari nama form
	$z=$_POST['dateDecision'];//dari nama form
	                     	
//Create connection

$con = new mysqli('localhost','root','','family');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO recommender (icMother, statusRecomm, dateRecommend, dateDecision, noStaff)
VALUES ('$w','$v','$y','$z','$u')";

if ($con->query($sql) === TRUE) {
   // Close connection
  
$con->close();
header('Location:reportRecommend.php');
    }
	
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>