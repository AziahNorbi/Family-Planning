<?php
$n = $_POST['name'];
$i = $_POST['ic'];
$ns = $_POST['noStaff'];
$pass = $_POST['password'];
$nP = $_POST['noPhone'];
$cS = $_POST['clinicId'];

//Create connection

$con = new mysqli('localhost','root','','family');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql = "INSERT INTO nurse (nameNurse, icNurse, noStaff, pass, NursePhoneNo, clinicId)
VALUES ('$n','$i','$ns','$pass','$nP', '$cS')";

if ($con->query($sql) === TRUE) {
   // Close connection
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
   $con->close();
    }
	
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

header('Location:loginNurse.php');
?>