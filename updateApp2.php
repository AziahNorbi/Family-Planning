<!--
	$db=mysql_connect("localhost", "root") or die (mysql_error());
	mysql_select_db("family",$db) or die (mysql_error());
	
	$w=$_POST['icMother'];//dari nama form
	$x=$_POST['AppDay'];//dari nama form
	$y=$_POST['dateApp'];//dari nama form
	$z=$_POST['timeApp'];//dari nama form
	
	if(isset($_POST['icMother'])){//dari nama form
		$strSQL = "UPDATE appointment
					SET dayApp='$x', dateApp='$y', timeApp='$z'
					WHERE icMother='$w'";
		$result=mysql_query($strSQL,$db)
				or die(mysql_error());	
	}
	 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	header('Location:appointmentdisplay.php');
?> -->
<?php
$n = $_POST['noS'];
$i = $_POST['icMother'];
$aD = $_POST['dateApp'];
$aT = $_POST['timeApp'];
$a = $_POST['AppDay'];

//Create connection

$con = new mysqli('localhost','root','','family');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO appointment (noStaff, icMother, dateApp, timeApp, dayApp)
VALUES ('$n','$i','$aD','$aT','$a')";

if ($con->query($sql) === TRUE) {
   // Close connection
$con->close();
header('Location:appointmentdisplay.php');
    }
	
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>