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
<!-- input-forms -->
<body class="dashboard-page">
<!-- input-forms -->
			<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
						<center><h4>Update Nurse Profile</h4></center>
						</div>
						<?php
							$x=$_SESSION['noStaff'];
							
							$mysqlserver="localhost";
							$mysqlusername="root";
							$mysqlpassword="";
							$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
							$dbname = 'family';
							mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
							$query = "SELECT * FROM nurse WHERE noStaff='$x'";
							$result = mysql_query ($query);
							//nama dari form
							while($row = mysql_fetch_array($result)){
							//echo "<option value=".$r['icMother'].">".$r['icMother']."</option>";//nama dari db
				            $z=$row['noStaff'];
							$a=$row['nameNurse'];//dari nama form
	                        $b=$row['icNurse'];//dari nama form
	                        $c=$row['pass'];//dari nama form
	                        $d=$row['NursePhoneNo'];//dari nama form
							$e=$row['clinicId'];
							}
			?>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
			<form class="form-horizontal" action="nurseUpdate2.php" method="POST" >
		<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-8">
		<input type="text" class="form-control1" name="name" id="name" value="<?php echo $a ?>" required="required" >
		</div>
		</div>
			
		<div class="form-group">
		<label for="focusedinput" class="col-sm-2 control-label">Identification card </label>
		<div class="col-sm-8">
		<input type="text" class="form-control1" name="ic" id="ic" value="<?php echo $b ?>" required="required" >
		</div>
		</div>
				<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Number Staff </label>
				<div class="col-sm-8">
				<input type="text" class="form-control1" name="noStaff" id="noStaff" value="<?php echo $x ?>" >
				</div>
				</div>
				
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Password </label>
				<div class="col-sm-8">
				<input type="password" class="form-control1" name="password" id="password" value="<?php echo $c ?>" required="required">
				</div>
				</div>
	
		<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Number Phone </label>
				<div class="col-sm-8">
				<input type="text" class="form-control1" name="noPhone" id="noPhone" value="<?php echo $d ?>" required="required" >
				</div>
				</div>
					
	<hr>
				<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Clinic Number</label>
				<div class="col-sm-8">
						  <select id="clinicId" name="clinicId">
        <option><?php echo $e ?></option>
		<option>--------</option>
            <?php
            
            $mysqlserver="localhost";
            $mysqlusername="root";
            $mysqlpassword="";
            $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
            $dbname = 'family';
            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
            $cdquery="SELECT clinicId FROM clinic";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from clinic failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $cdTitle=$cdrow["clinicId"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }
                
            ?>
    
        </select></div></div>
									
				<br>
					<div class="form-group">
					<center><button type="submit" class="btn btn-success">Update</button></center>
					</div>
					</form>
				<!-- //input-forms -->

		</div></div></div></div>
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section></div></div>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>