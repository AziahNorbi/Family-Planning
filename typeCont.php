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
<nav class="main-menu">
		<ul>
			<li>
				<a href="motherHome.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Home
					</span>
				</a>
			</li>
			<li>
				<a href="recordMother2.php">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Mother Profile
				</span>
				</a>
			</li>
			
			<li>
				<a href="motherResultRecommend.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Recommender Report
					</span>
				</a>
			</li>
						
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-bar-chart nav_icon"></i>
						<span class="nav-text">Contraception Details</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="typeCont.php">
							Type Contraception 
						</a>
					</li>
					<li>
						<a class="subnav-text" href="motherCont.php">
							Contraception Report 
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="motherApp.php">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">
						 Appointment Report 
					</span>
				</a>
				
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="logoutMother.php">
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
				<h1><a href="motherHome.php"><img src="images/logo.png" alt="family" /></a></h1>
			</div>
			<div class="header-right">
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<p><?php session_start();
	                                        $x= $_SESSION['icMother']; 
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
<body class="dashboard-page">
<!-- input-forms -->
				<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<center><h4> Type Contraception </h4></center>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
			<form class="form-horizontal" action=" " method="post">
			<div class="form-group">
			<style>
div.gallery {
    margin: 5px;
    border: 0px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: left;
}
</style>
</head>
<body>
<table align="center">
<tr><td>
<div class="gallery">
  <a target="_blank" href="images/4.png">
    <img src="images/4.png" alt="The Pill" width="300" height="200">
  </a>
  <div class="desc"><b>Birth control Pill</b></div>
  <div class="desc">
 Prescription pill containing estrogen and
progestin that suppresses ovulation.<br> 
How to use it :<br> Must be taken daily, regardless of the frequency of 
intercourse.</div>
</div></td>

<td>
<div class="gallery">
  <a target="_blank" href="images/5.png">
    <img src="images/5.png" alt="Injection" width="600" height="400">
  </a>
  <div class="desc"><b>Injection</b></div>
  <div class="desc">
 How to use it : <br>
* If you have the injection during the first five days of your 
cycle, you will be immediately protected against becoming pregnant.<br>
* If you have the injection on any other day of your cycle,
you will not be protected against pregnancy for up to seven day.</div>
</div></td>

<td>
<div class="gallery">
  <a target="_blank" href="images/6.png">
    <img src="images/6.png" alt="IUD" width="600" height="400">
  </a>
  <div class="desc"><b>Intra Uterine Device</b><br>[IUD]</div>
  <div class="desc">
  T-shaped device inserted in the uterus during a visit to the doctor.<br>
How to use it :<br> Can remain in place for up to one or 10 years depending on type.</div>
</div></td>

<td>
<div class="gallery">
  <a target="_blank" href="images/7.png">
    <img src="images/7.png" alt="Implant" width="600" height="400">
  </a>
  <div class="desc"><b>Implant</b></div>
  <div class="desc">
 How to use it : <br> 
 During the first five days of you menstrual cycle, you
will be immediately protected against becoming pregnant.
If it is fitted on any other day of your menstrual cycle,
you will not be protected against pregnancy for up to seven day.</div>
</div></td></tr>
</table>
			</div>
			
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