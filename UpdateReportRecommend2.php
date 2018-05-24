
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
				<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<center><h4> Update Report Recommendation </h4></center>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
								<?php
							$a=$_GET['icMother'];
							
							$mysqlserver="localhost";
							$mysqlusername="root";
							$mysqlpassword="";
							$link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());
            
							$dbname = 'family';
							mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());
            
							$query = "SELECT * FROM recommender WHERE icMother='$a'";
							$result = mysql_query ($query);
							//nama dari form
							while($row = mysql_fetch_array($result)){
							//echo "<option value=".$r['icMother'].">".$r['icMother']."</option>";//nama dari db
				            
							$a=$row['icMother'];//dari nama form
	                        $b=$row['dateRecommend'];
							$c=$row['dateDecision'];
							}
			?>
			<form class="form-horizontal" action="recommenderList2.php" method="post">				
			<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Identification card </label>
			<div class="col-sm-8">
			<input type="text" class="form-control1" name="ic" id="ic" value="<?php  echo $a; ?>" required="required">
			</div>
			</div> 
				
			<div class="form-group">
			<label for="radio" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-8">
<div class="radio-inline"><label><input type="radio"  name="status" id="status" value="New">New Member</label></div>
<div class="radio-inline"><label><input type="radio"  name="status" id="status" value="Exist">Existed Member</label></div>			
			</div></div>	
		
			<div class="form-group">
			<style type="text/css">

#evtcal a:link {font: normal 12pt "Arial", "Helvetica", "Sans Serif"; color: #004400; text-decoration: none;}		/* unvisited link */
#evtcal a:visited {font: normal 12pt "Arial", "Helvetica", "Sans Serif"; color: #004400; text-decoration: none;}	/* visited link */
#evtcal a:hover {font: normal 12pt "Arial", "Helvetica", "Sans Serif"; color: #004400; text-decoration: underline;}	/* mouse over link */
#evtcal a:active {font: normal 12pt "Arial", "Helvetica", "Sans Serif"; color: #004400; text-decoration: none;}		/* selected link */

</style>
<script language="JavaScript" type="text/javascript" src="events.js"></script>
<script type="text/JavaScript" language="JavaScript">

/* Preload images script */
var myimages=new Array()

function preloadimages(){
	for (i=0;i<preloadimages.arguments.length;i++){
		myimages[i]=new Image();
		myimages[i].src=preloadimages.arguments[i];
	}
}


/* The path of images to be preloaded inside parenthesis: (Extend list as desired.) */
preloadimages("images/PrevYrOff40x40.jpg","images/PrevYrOn40x40.jpg","images/PrevMoOff40x40.jpg","images/PrevMoOn40x40.jpg","images/NextYrOff40x40.jpg","images/NextYrOn40x40.jpg","images/NextMoOff40x40.jpg","images/NextMoOn40x40.jpg");


/***************************************************************************************
	JavaScript Calendar - Digital Christian Design
	//Script featured on and available at JavaScript Kit: http://www.javascriptkit.com
	// Functions
		changedate(): Moves to next or previous month or year, or current month depending on the button clicked.
		createCalendar(): Renders the calander into the page with links for each to fill the date form filds above.
			
***************************************************************************************/

var thisDate = 1;							// Tracks current date being written in calendar
var wordMonth = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var today = new Date();							// Date object to store the current date
var todaysDay = today.getDay() + 1;					// Stores the current day number 1-7
var todaysDate = today.getDate();					// Stores the current numeric date within the month
var todaysMonth = today.getUTCMonth() + 1;				// Stores the current month 1-12
var todaysYear = today.getFullYear();					// Stores the current year
var monthNum = todaysMonth;						// Tracks the current month being displayed
var yearNum = todaysYear;						// Tracks the current year being displayed
var firstDate = new Date(String(monthNum)+"/1/"+String(yearNum));	// Object Storing the first day of the current month
var firstDay = firstDate.getUTCDay();					// Tracks the day number 1-7 of the first day of the current month
var lastDate = new Date(String(monthNum+1)+"/0/"+String(yearNum));	// Tracks the last date of the current month
var numbDays = 0;
var calendarString = "";
var eastermonth = 0;
var easterday = 0;


function changedate(buttonpressed) {
	if (buttonpressed == "prevyr") yearNum--;
	else if (buttonpressed == "nextyr") yearNum++;
	else if (buttonpressed == "prevmo") monthNum--;
	else if (buttonpressed == "nextmo") monthNum++;
	else  if (buttonpressed == "return") { 
		monthNum = todaysMonth;
		yearNum = todaysYear;
	}

	if (monthNum == 0) {
		monthNum = 12;
		yearNum--;
	}
	else if (monthNum == 13) {
		monthNum = 1;
		yearNum++
	}

	lastDate = new Date(String(monthNum+1)+"/0/"+String(yearNum));
	numbDays = lastDate.getDate();
	firstDate = new Date(String(monthNum)+"/1/"+String(yearNum));
	firstDay = firstDate.getDay() + 1;
	createCalendar();
	return;
}


function easter(year) {
// feed in the year it returns the month and day of Easter using two GLOBAL variables: eastermonth and easterday
var a = year % 19;
var b = Math.floor(year/100);
var c = year % 100;
var d = Math.floor(b/4);
var e = b % 4;
var f = Math.floor((b+8) / 25);
var g = Math.floor((b-f+1) / 3);
var h = (19*a + b - d - g + 15) % 30;
var i = Math.floor(c/4);
var j = c % 4;
var k = (32 + 2*e + 2*i - h - j) % 7;
var m = Math.floor((a + 11*h + 22*k) / 451);
var month = Math.floor((h + k - 7*m + 114) / 31);
var day = ((h + k - 7*m +114) % 31) + 1;
eastermonth = month;
easterday = day;
}


function createCalendar() {
	calendarString = '';
	var daycounter = 0;
	calendarString += '<table width="312" border="1" cellpadding="0" cellspacing="1">';
	calendarString += '<tr>';
	calendarString += '<td align=\"center\" valign=\"center\" width=\"40\" height=\"40\"><a href=\"#\" onMouseOver=\"document.PrevYr.src=\'images\/PrevYrOn40x40\.jpg\';\" onMouseOut=\"document.PrevYr.src=\'images\/PrevYrOff40x40\.jpg\';\" onClick=\"changedate(\'prevyr\')\"><img name=\"PrevYr\" src=\"images\/PrevYrOff40x40\.jpg\" width=\"40\" height=\"40\" border=\"0\" alt=\"Prev Yr\"\/><\/a><\/td>';
	calendarString += '<td align=\"center\" valign=\"center\" width=\"40\" height=\"40\"><a href=\"#\" onMouseOver=\"document.PrevMo.src=\'images\/PrevMoOn40x40\.jpg\';\" onMouseOut=\"document.PrevMo.src=\'images\/PrevMoOff40x40\.jpg\';\" onClick=\"changedate(\'prevmo\')\"><img name=\"PrevMo\" src=\"images\/PrevMoOff40x40\.jpg\" width=\"40\" height=\"40\" border=\"0\" alt=\"Prev Mo\"\/><\/a><\/td>';
	calendarString += '<td bgcolor=\"#C8C896\" align=\"center\" valign=\"center\" width=\"128\" height=\"40\" colspan=\"3\"><b>' + wordMonth[monthNum-1] + '&nbsp;&nbsp;' + yearNum + '<\/b><\/td>';
	calendarString += '<td align=\"center\" valign=\"center\" width=\"40\" height=\"40\"><a href=\"#\" onMouseOver=\"document.NextMo.src=\'images\/NextMoOn40x40\.jpg\';\" onMouseOut=\"document.NextMo.src=\'images\/NextMoOff40x40\.jpg\';\" onClick=\"changedate(\'nextmo\')\"><img name=\"NextMo\" src=\"images\/NextMoOff40x40\.jpg\" width=\"40\" height=\"40\" border=\"0\" alt=\"Next Mo\"\/><\/a><\/td>';
	calendarString += '<td align=\"center\" valign=\"center\" width=\"40\" height=\"40\"><a href=\"#\" onMouseOver=\"document.NextYr.src=\'images\/NextYrOn40x40\.jpg\';\" onMouseOut=\"document.NextYr.src=\'images\/NextYrOff40x40\.jpg\';\" onClick=\"changedate(\'nextyr\')\"><img name=\"NextYr\" src=\"images\/NextYrOff40x40\.jpg\" width=\"40\" height=\"40\" border=\"0\" alt=\"Next Yr\"\/><\/a><\/td>';
	calendarString += '<\/tr>';
	calendarString += '<tr>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Sun<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Mon<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Tue<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Wed<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Thu<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Fri<\/td>';
	calendarString += '<td bgcolor=\"#DDDDDD\" align=\"center\" valign=\"center\" width=\"40\" height=\"22\">Sat<\/td>';
	calendarString += '<\/tr>';

	thisDate == 1;

	for (var i = 1; i <= 6; i++) {
		calendarString += '<tr>';
		for (var x = 1; x <= 7; x++) {
			daycounter = (thisDate - firstDay)+1;
			if (daycounter>31)
				continue;
			thisDate++;
			if ((daycounter > numbDays) || (daycounter < 1)) {
				calendarString += '<td align=\"center\" bgcolor=\"#888888\" height=\"30\" width=\"40\">&nbsp;<\/td>';
			} else {
				if (checkevents(daycounter,monthNum,yearNum,i,x) || ((todaysDay == x) && (todaysDate == daycounter) && (todaysMonth == monthNum))){
					if ((todaysDay == x) && (todaysDate == daycounter) && (todaysMonth == monthNum)) {
						calendarString += '<td align=\"center\" bgcolor=\"#AAFFAA\" height=\"30\" width=\"40\"><a href=\"javascript:showevents(' + daycounter + ',' + monthNum + ',' + yearNum + ',' + i + ',' + x + ')\">' + daycounter + '<\/a><\/td>';
					}
 					else	calendarString += '<td align=\"center\" bgcolor=\"#FFFFC8\" height=\"30\" width=\"40\"><a href=\"javascript:showevents(' + daycounter + ',' + monthNum + ',' + yearNum + ',' + i + ',' + x + ')\">' + daycounter + '<\/a><\/td>';
				} else {
					calendarString += '<td align=\"center\" bgcolor=\"#DDFFFF\" height=\"30\" width=\"40\">' + daycounter + '<\/td>';
				}
			}
		}
		calendarString += '<\/tr>';
	}

	calendarString += '<tr><td colspan=\"7\" nowrap align=\"center\" valign=\"center\" bgcolor=\"#C8C896\" width=\"280\" height=\"22\"><a href=\"javascript:changedate(\'return\')\"><b>Show Current Date<\/b><\/a><\/td><\/tr><\/table>';

	var object=document.getElementById('calendar');
	object.innerHTML= calendarString;
	thisDate = 1;
}


function checkevents(day,month,year,week,dayofweek) {
var numevents = 1;
var floater = 0;

	for (var i = 0; i < events.length; i++) {
		if (events[i][0] == "W") {
			if ((events[i][2] == dayofweek)) numevents++;
		}
		else if (events[i][0] == "Y") {
			if ((events[i][2] == day) && (events[i][1] == month)) numevents++;
		}
		else if (events[i][0] == "F") {
			if ((events[i][1] == 3) && (events[i][2] == 0) && (events[i][3] == 0) ) {
				easter(year);
				if (easterday == day && eastermonth == month) numevents++;
			} else {
				floater = floatingholiday(year,events[i][1],events[i][2],events[i][3]);
				if ((month == 5) && (events[i][1] == 5) && (events[i][2] == 4) && (events[i][3] == 2)) {
					if ((floater + 7 <= 31) && (day == floater + 7)) {
						numevents++;
					} else if ((floater + 7 > 31) && (day == floater)) numevents++;
				} else if ((events[i][1] == month) && (floater == day)) numevents++;
			}
		}
		else if ((events[i][2] == day) && (events[i][1] == month) && (events[i][3] == year)) {
			numevents++;
		}
	}

	if (numevents == 0) {
		return false;
	} else {
		return true;
	}
}


function showevents(day,month,year,week,dayofweek) {
document.getElementById('dateRecommend').value = day+"/"+month+"/"+year;
document.getElementById('dateDecision').value = day+"/"+month+"/"+year;
var theevent = "";
var floater = 0;

	for (var i = 0; i < events.length; i++) {
		// First we'll process recurring events (if any):
		if (events[i][0] != "") {
			if (events[i][0] == "D") {
			}
			if (events[i][0] == "W") {
				if ((events[i][2] == dayofweek)) {
				theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
				theevent += events[i][6] + '\n';
				theevent += 'Start Time: ' + events[i][4] + '\n';
				theevent += 'Ending Time: ' + events[i][5] + '\n';
				theevent += 'Description: ' + events[i][7] + '\n';
				theevent += '\n -------------- \n\n';
				document.forms.eventform.eventlist.value = theevent;
				}
			}
			if (events[i][0] == "M") {
			}
			if (events[i][0] == "Y") {
				if ((events[i][2] == day) && (events[i][1] == month)) {
				theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
				theevent += events[i][6] + '\n';
				theevent += 'Start Time: ' + events[i][4] + '\n';
				theevent += 'Ending Time: ' + events[i][5] + '\n';
				theevent += 'Description: ' + events[i][7] + '\n';
				theevent += '\n -------------- \n\n';
				document.forms.eventform.eventlist.value = theevent;
				}
			}
			if (events[i][0] == "F") {
				if ((events[i][1] == 3) && (events[i][2] == 0) && (events[i][3] == 0) ) {
					if (easterday == day && eastermonth == month) {
						theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
						theevent += events[i][6] + '\n';
						theevent += 'Start Time: ' + events[i][4] + '\n';
						theevent += 'Ending Time: ' + events[i][5] + '\n';
						theevent += 'Description: ' + events[i][7] + '\n';
						theevent += '\n -------------- \n\n';
						document.forms.eventform.eventlist.value = theevent;
					} 
				} else {
					floater = floatingholiday(year,events[i][1],events[i][2],events[i][3]);

					if ((month == 5) && (events[i][1] == 5) && (events[i][2] == 4) && (events[i][3] == 2)) {
						if ((floater + 7 <= 31) && (day == floater + 7)) {
							theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
							theevent += events[i][6] + '\n';
							theevent += 'Start Time: ' + events[i][4] + '\n';
							theevent += 'Ending Time: ' + events[i][5] + '\n';
							theevent += 'Description: ' + events[i][7] + '\n';
							theevent += '\n -------------- \n\n';
							document.forms.eventform.eventlist.value = theevent;
						} else if ((floater + 7 > 31) && (day == floater)) {
							theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
							theevent += events[i][6] + '\n';
							theevent += 'Start Time: ' + events[i][4] + '\n';
							theevent += 'Ending Time: ' + events[i][5] + '\n';
							theevent += 'Description: ' + events[i][7] + '\n';
							theevent += '\n -------------- \n\n';
							document.forms.eventform.eventlist.value = theevent;
						}
					} else if ((events[i][1] == month) && (floater == day)) {
						theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
						theevent += events[i][6] + '\n';
						theevent += 'Start Time: ' + events[i][4] + '\n';
						theevent += 'Ending Time: ' + events[i][5] + '\n';
						theevent += 'Description: ' + events[i][7] + '\n';
						theevent += '\n -------------- \n\n';
						document.forms.eventform.eventlist.value = theevent;
					}
				}
		}
		}
		// Now we'll process any One Time events happening on the matching month, day, year:
		else if ((events[i][2] == day) && (events[i][1] == month) && (events[i][3] == year)) {
			theevent += "Events of: \n" + month +'/'+ day +'/'+ year + '\n';
			theevent += events[i][6] + '\n';
			theevent += 'Start Time: ' + events[i][4] + '\n';
			theevent += 'Ending Time: ' + events[i][5] + '\n';
			theevent += 'Description: ' + events[i][7] + '\n';
			theevent += '\n -------------- \n\n';
			document.forms.eventform.eventlist.value = theevent;
		}
	}
	if (theevent == "") document.forms.eventform.eventlist.value = 'No events to show.';
}


function floatingholiday(targetyr,targetmo,cardinaloccurrence,targetday) {
// Floating holidays/events of the events.js file uses:
//	the Month field for the Month (here it becomes the targetmo field)
//	the Day field as the Cardinal Occurrence  (here it becomes the cardinaloccurrence field)
//		1=1st, 2=2nd, 3=3rd, 4=4th, 5=5th, 6=6th occurrence of the day listed next
//	the Year field as the Day of the week the event/holiday falls on  (here it becomes the targetday field)
//		1=Sunday, 2=Monday, 3=Tuesday, 4=Wednesday, 5=Thurday, 6=Friday, 7=Saturday
//	example: "F",	"1",	"3",	"2", = Floating holiday in January on the 3rd Monday of that month.
//
// In our code below:
// 	targetyr is the active year
// 	targetmo is the active month (1-12)
// 	cardinaloccurrence is the xth occurrence of the targetday (1-6)
// 	targetday is the day of the week the floating holiday is on
//		0=Sun; 1=Mon; 2=Tue; 3=Wed; 4=Thu; 5=Fri; 6=Sat
//		Note: subtract 1 from the targetday field if the info comes from the events.js file
//
// Note:
//	If Memorial Day falls on the 22nd, 23rd, or 24th, then we add 7 to the dayofmonth to the result.
//
// Example: targetyr = 2052; targetmo = 5; cardinaloccurrence = 4; targetday = 1
//	This is the same as saying our floating holiday in the year 2052, is during May, on the 4th Monday
//
var firstdate = new Date(String(targetmo)+"/1/"+String(targetyr));	// Object Storing the first day of the current month.
var firstday = firstdate.getUTCDay();	// The first day (0-6) of the target month.
var dayofmonth = 0;	// zero out our calendar day variable.

	targetday = targetday - 1;

	if (targetday >= firstday) {
		cardinaloccurrence--;	// Subtract 1 from cardinal day.
		dayofmonth = (cardinaloccurrence * 7) + ((targetday - firstday)+1);
	} else {
		dayofmonth = (cardinaloccurrence * 7) + ((targetday - firstday)+1);
	}
return dayofmonth;
}

</script>

</head>

<body style="background-color: transparent;" onload="changedate('return')">
<center>
<table id="evtcal" border="0" cellpadding="0" cellspacing="0" width="584">
	<tbody>
		<tr>
			<td style="padding: 3px;" align="center" bgcolor="#FFF8DC" valign="top" width="314">
				<div id="calendar"><!--  Dynamically Filled --></div>
				
				</center>
			</td>
		</tr>
	</tbody>
</table>
</center>
 
</div>
			
		<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Date Decision </label>
				<div class="col-sm-8">
				<input type="text" class="form-control1" name="dateDecision" id="dateDecision" value="<?php echo $c; ?>" required="required">
				</div>
				</div>
				
		<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Date Recommend </label>
				<div class="col-sm-8">
				<input type="text" class="form-control1" name="dateRecommend" id="dateRecommend" value="<?php echo $b; ?>" required="required">
				</div>
				</div>
		<hr>
		<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Number Staff</label>
				<div class="col-sm-8">
				<input type="text" class="form-control1" name="noStaff" id="noStaff" value="<?php echo $x ?>">
				</div>
				</div>
				
					<div class="form-group">
					<center><button type="submit" class="btn btn-success">Update</button></center>
					</div>
					</form>
					</div>
						</div>
					</div>
				<!-- //input-forms -->

</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</div></section>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>