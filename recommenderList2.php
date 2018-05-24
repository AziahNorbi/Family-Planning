<?php
$nS = $_POST['noStaff'];
$s = $_POST['status'];
$dD = $_POST['dateDecision'];
$dR = $_POST['dateRecommend'];
$i	= $_POST['ic'];
//Create connection

$con = new mysqli('localhost','root','','family');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO recommender (icMother, statusRecomm, dateDecision, dateRecommend, noStaff)
VALUES ('$i','$s','$dD','$dR','$nS')";

if ($con->query($sql) === TRUE) {
  // Close connection
 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  $con->close();
header('Location:reportRecommend.php');
    }
	
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>