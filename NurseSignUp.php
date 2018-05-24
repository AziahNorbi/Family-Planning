<!DOCTYPE html>
<head>
<title>Recommender of Family Planning</title>
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
	
<body class="signup-body">
<!-- input-forms -->
			<div class="agile-signup">	
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h3>Nurse Registration Form</h3>
				</div>
		<form class="form-horizontal" action="NurseSignUp2.php" method="POST" >
		<div class="form-group">
		<input type="text" class="form-control1" name="name" id="name" placeholder="Nurse Name" required="required">
		</div>
			
		<div class="form-group">
		<input type="text" class="form-control1" name="ic" id="ic" placeholder="Identification Card Nurse" required="required" >
		</div>
				<div class="form-group">
				<input type="text" class="form-control1" name="noStaff" id="noStaff" placeholder="Number Staff" required="required">
				</div>
				
			<div class="form-group">
				<input type="password" class="form-control1" name="password" id="password" placeholder="Password" required="required">
				</div>
	
		<div class="form-group">
				<input type="text" class="form-control1" name="noPhone" id="noPhone" placeholder="Number Phone" required="required" >
				</div>
					
	<hr>
	<a href="clinicDetails.php"><p>Clinic Details</p></a><br>
			<div class="form-group">
				<select id="clinicId" name="clinicId" required="required">
        <option>Clinic Number</option>
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
        </select></div>				
					<div class="form-group">
					<center><button type="submit" class="btn btn-danger">Register</button></center>
					</div>			
					</form>
				<!-- //input-forms -->
</div></div>
		
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer </section>-->
	<script src="js/bootstrap.js"></script>
	
</body>
</html>