<!DOCTYPE html>
<head>
<title>Family Planning Recommender System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		
</head>
<body class="dashboard-page">
<nav class="main-menu">
		<ul>
			<li>
				<a href="home.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Nurse Profile
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Nurse Details</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="staffReport.php">
							Nurse Report
						</a>
					</li>
					<li>
						<a class="subnav-text" href="clinicReport.php">
							Clinic Report
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="motherRegister.php">
					<i class="fa fa-check-square-o nav_icon"></i>
					<span class="nav-text">
					Mother Registration
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-bar-chart nav_icon"></i>
						<span class="nav-text">Mother Details</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="motherReport.php">
							Mothers Report
						</a>
					</li>
					<li>
						<a class="subnav-text" href="resultRecommend.php">
							Recommender Result 
						</a>
					</li>
					<li>
						<a class="subnav-text" href="reportRecommend.php">
							Recommendation Report 
						</a>
					</li>
					<li>
						<a class="subnav-text" href="reportContraception.php">
							Contraception Report 
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="appointmentdisplay.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Appointment Report
					</span>
				</a>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="logoutNurse.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
		<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="home.php"><img src="images/logo.png" alt="family" /></a></h1>
			</div>
			<div class="header-right">
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<p><?php session_start();
	                                        $x= $_SESSION['noStaff']; 
											echo $x ?></p>
										<div class="clearfix"></div>	
									</div>	
								</a>
								
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>			
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">
		<!-- input form -->
<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<center><h4> Contraception Report </h4></center>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
								<style>
* {
  box-sizing: border-box;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for IC .." title="Type in a IC"> 

<table id="myTable">
<tr class="header">
<th style="width:10%;"> IC Mother</th> <th>Type Contraception</th> <th> Date Contraception </th> <th><i> UPDATE </i></th> <th><i> DELETE </i></th>
<th>Appointment</th></tr> 

<?php
$con=mysqli_connect("localhost","root","","family");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // SQL statement
$result = mysqli_query($con,"SELECT * FROM contraception WHERE noStaff='$x' ");

while($row = mysqli_fetch_array($result))
  {
	$b=$row['conId'];
	 echo "<tr><td>";
	echo $row['icMother'];
	$d=$row['icMother'];
	echo "</td>";
	 
	echo "<td>"; 
    echo $row['typeCont'];
	echo "</td>";
	
	echo "<td>"; 
    echo $row['dateCont'];
	echo "</td>";
	
	
	echo "<td>";
    echo"<form action=contraceptionUpdate.php method=get>";
	echo"<input type=hidden value=$d name=icMother />";
	echo"<button type='submit' class='btn btn-success'>Update</button>";
	echo"</form>";
	echo "</td>";
	
	echo"<td>";
    echo"<form  name='frmdelete' action='contDelete2.php' method=post>";
	echo"<input type=hidden value=$b name=id />";
	echo"<button type='submit' class='btn btn-danger' onclick='return myFunction()'>Delete</button>";
	echo"<script>function myFunction() {
		var r = confirm('Are you sure want to delete record ?');
		
		if (r == true){
			document.frmdelete.submit();
			return true;
		}
		
		else
			return false;
    }";
	echo"</script>";
	echo"</form>";
	echo "</td>";
	
	echo "<td>";
	echo"<form action=appointment.php method=get>";
	echo"<input type=hidden value=$d name=icMother />";
	echo"<button type='submit' class='btn btn-success'>Add</button>";
	echo"</form>";
	echo "</td>";
	
	
  }
$r = mysqli_query($con,"SELECT * FROM contraception where typeCont='Pill'");
$total_pill = mysqli_num_rows($r);

$s = mysqli_query($con,"SELECT * FROM contraception where typeCont='Injection'");
$total_injection = mysqli_num_rows($s);

$t = mysqli_query($con,"SELECT * FROM contraception where typeCont='IUD'");
$total_IUD = mysqli_num_rows($t);

$u = mysqli_query($con,"SELECT * FROM contraception where typeCont='Implant'");
$total_Implant = mysqli_num_rows($u);


?>
</table>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
		</div>
		</div>
		</div>
		
		<br>
		<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<center><h4> Contraception Report (Pie chart)</h4></center>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
		<center><div id="piechart"></div></center>						
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Percentage of type Contraception'],
  ['Pill', <?php echo $total_pill;?>],
  ['IUD', <?php echo $total_IUD; ?>],
  ['Injection', <?php echo $total_injection; ?>],
  ['Implant', <?php echo $total_Implant; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':650, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
</div></div></div></div>
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>

