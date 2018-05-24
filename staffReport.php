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
							<center><h4>Nurse Report </h4></center>
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
<table id="myTable">
<tr class="header">
<th style="width:25%;">Name Staff </th> <th>Number Staff</th> <th>Number Phone</th> <th>Clinic Number </th> <th>Clinic District</th> <th>Clinic Address</th>
</tr> 
<?php
$x=$_SESSION['noStaff'];
$con=mysqli_connect("localhost","root","","family");

  // SQL statement

  $result = mysqli_query($con,"SELECT nurse.nameNurse, nurse.noStaff, nurse.NursePhoneNo, clinic.clinicId, clinic.clinicDistrict, clinic.clinicAdd FROM nurse, clinic 
  WHERE nurse.clinicId=clinic.clinicId");

while($row=mysqli_fetch_array($result))
  {
  ?>
	<tr><td><?php echo $row['nameNurse']; ?> </td>
	    <td><?php echo $row['noStaff']; ?> </td>
	    <td><?php echo $row['NursePhoneNo']; ?> </td> 
        <td> <?php echo $row['clinicId']; ?> </td>
        <td><?php echo $row['clinicDistrict']; ?> </td>
	    <td><?php echo $row['clinicAdd'];
        }	
		?> 
	</td></tr>
	</table>
</div>
		</div>
		</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>