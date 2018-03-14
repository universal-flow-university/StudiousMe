<?php
session_start();
if(!isset($_SESSION['user'])){
 header("location:userlogin.php?problem = not logged in");
 exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Studious Me</title>
<link rel="stylesheet" type="text/css" href="cssmain\user.css">
<link rel="stylesheet" href="cssmain\table.css" type="text/css"/>	
</head>

<body>
<div id="wrapper">
<div id="header">
<br>
<a href="userhomepage.php"><img src="images\sitelogo.png" alt="sitelogo"
  style="float:left;width:600px;height:120px;"></a>

 <div id="dropdown">
   <ul id="drop-nav" style="font-family:Arial;">
  
  <li><a href="userhomepage.php">HOME</a>
  </li>
  <li><a href="#">MY ACTION</a>
    <ul>
      <li><a href="books.php">View Books</a></li>
      <li><a href="issue.php">My Issue Status</a></li>
      
    </ul>
  </li>
  <li><a href="#">STUDY RESOURCES</a>
    <ul>
      <li><a href="usyllabus.php">Syllabus</a></li>
      <li><a href="uebooks.php">E-books</a></li>
	  <li><a href="upapers.php">University Papers</a></li>
	  <li><a href="uonlinetest.php">Free Online Test</a></li>
    </ul>
  </li>
  <li><a href="#">ABOUT US</a>
    <ul>
	  <li><a href="ugoals.php">Our Goals</a></li>
	  <li><a href="umission.php">Mission, Vision & Core Values</a></li>
	  <li><a href="ucontactus.php">Contact Us</a></li>
	</ul>
  </li>
  <li><a href="#">MY ACCOUNT</a>
    <ul>
	  <li><a href="profile.php">View Profile</a></li>
	  <li><a href="logout.php">Logout</a></li>
	</ul>
  </li>	  
</ul>
   
  </div>
</div>
<hr>
 

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:0px; width: 1295px; height:160px">
	<p ><font size='8px' color='#2266FF'><img src="images\mu.png" alt="University"
  style="float:left;width:400px;height:150px;"> <b>MUMBAI UNIVERSITY SYLLABUS<b></font></p>
</div>

<div id="down " style="background-color:white; color:black; padding:10px;margin-top:20px; width: 1295px; height:160px">
	<p ><font size='6px' color='#2266FF'><b>FIRST YEAR ENGINEERING<b></font></p>
	<li><a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/FE%20Sem%20I.pdf" style="color: black; text-decoration: none">First Year Engineering (FE) Semester 1</a></li>
		<li><a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/FE%20Sem%20II.pdf" style="color: black; text-decoration: none">First Year Engineering (FE) Semester 2</a></li>
</div>

<<div style="background-color:white; color:black; padding:20px;margin-left:0px;margin-top:0px; width:605px; height:900px">
	<p ><font size='6px' color='#2266FF'><b>FIRST YEAR ENGG. BLUEPRINTS<b></font></p>
		<div class="CSSTableGenerator" style="width:600px;height:300px;">
			<table >
				<tr> 
					<td>
						SEM I
					</td>
					<td>
						SEM II
					</td>
				</tr>
				<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Maths1%20Blueprint.pdf" style="color: blue; font-size: 12px;">Applied Maths 1</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Maths2%20Blueprint.pdf" style="color: blue; font-size: 12px;">Applied Maths 2</a>
					</td>
				</tr>
				<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Physics1.pdf" style="color: blue; font-size: 12px;">Applied Physics 1</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Physics2.pdf" style="color: blue; font-size: 12px;">Applied Physics 2</a>
					</td>
				</tr>
				<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Chem1.pdf" style="color: blue; font-size: 12px;">Applied Chemistry 1</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Chem2.pdf" style="color: blue; font-size: 12px;">Applied Chemistry 2</a>
					</td>
				</tr>
								<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/Mechanics%20blueprint.pdf" style="color: blue; font-size: 12px;">Engineering Mechanics</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/ED%20blueprint.pdf" style="color: blue; font-size: 12px;">Engineering Drawing (ED)</a>
					</td>
				</tr>
								<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/BEE%20Blue%20Print.pdf" style="color: blue; font-size: 12px;">Basic Electrical & Electronics Engineering (BEE)</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/SPA.pdf" style="color: blue; font-size: 12px;">Structured Programming Approach (SPA)</a>
					</td>
				</tr>
								<tr>
					<td >
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/SPA.pdf" style="color: blue; font-size: 12px;">Environmental Studies (EVS)</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/F.E/blueprints/CS.pdf" style="color: blue; font-size: 12px;">Communiaction Skill (CS)</a>
					</td>
				</tr>
			</table>
		</div>
</div>

<<div style="background-color:white; color:black; padding:20px;margin-left:665px;margin-top:-958px; width:608px; height: 900px">
	<p ><font size='6px' color='#2266FF'><b>SECOND YEAR ENGINEERING<b></font></p>
		<div class="CSSTableGenerator" style="width:600px;height:800px;">
			<table >
				<tr> 
					<td>
						COURSE
					</td>
					<td >
						REVISED 2012
					</td>
					<td>
						REVISED 2007
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Automobile Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/automobile.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://mu.ac.in/Auto.%20Engg.iii-iv%20rev.%20cour..pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Medical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/biomedical.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://mu.ac.in/Bio-Medical%20Engg.%20iii-iv%20rev..pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Technology Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/biotechnology.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Chemical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/chemical.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/sem3_chem.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/sem4_chem.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Civil Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/civil.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Civil%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Civil%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Computer Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/Computer.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Comp%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Comp%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electrical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/electrical.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Electrical%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Electrical%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electronics Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/Electronics%20Engg.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Elex%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/Elex%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Elec & TelComm Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/EXTC.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/EXTC%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/EXTC%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Instrumentation Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/instrumentation.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/instru_sem3.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/instru_sem4.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Information Technology</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/IT.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/IT%20Sem%20III.pdf" style="color: blue; font-size: 12px;">Sem 3</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/IT%20Sem%20IV.pdf" style="color: blue; font-size: 12px;">Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Mechanical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/Mechanical_Engg.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/mechanical.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Printing & Packaging Technology</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/printing-packaging-technology.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Production Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/S.E/MU_R2012/production.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
					<td>
						<a href="http://mu.ac.in/Product.%20engg.iii-iv%20rev.%20cour.pdf" style="color: blue; font-size: 12px;">Sem 3 & Sem 4</a>
					</td>
				</tr>
				
			</table>
		</div>
</div>

<<div style="background-color:white; color:black; padding:20px;margin-left:0px;margin-top:0px; width:605px; height: 900px;">
	<p ><font size='6px' color='#2266FF'><b>THIRD YEAR ENGINEERING<b></font></p>	
		<div class="CSSTableGenerator" style="width:600px;height:800px;">
			<table >
				<tr> 
					<td>
						COURSE
					</td>
					<td >
						REVISED 2012
					</td>
					<td>
						REVISED 2007
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Automobile Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/auto.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://mu.ac.in/T.Y.%20Automobile%20Sem.%20V%20&%20VI%20Rev..pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Medical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/biomed.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://mu.ac.in/Bio-Medical%20Engg.%20v-vi%20rev.cor.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Technology Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/biotech.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Chemical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/chem.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/mu-chemical-syllabus-sem5.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/mu-chemical-syllabus-sem6.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Civil Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/civil.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Civil%20Sem%20V-VI.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Computer Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/comps.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Comp%20Sem%20V.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Comp%20Sem%20VI.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electrical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/electrical.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Electrical%20Sem%20V-VI.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electronics Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/elex.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Elex%20Sem%20V.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/Elex%20Sem%20VI.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Elec & TelComm Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/extc.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/EXTC%20Sem%20V.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/EXTC%20Sem%20VI.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Instrumentation Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/instru.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/instru_sem5.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/instru_sem6.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Information Technology</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/IT.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/IT%20Sem%20V.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/IT%20Sem%20VI.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Mechanical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/mech.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/mech_sem5.pdf" style="color: blue; font-size: 12px;">Sem 5</a>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/mech_sem6.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Printing & Packaging Technology</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/PPT.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Production Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/MU_R2012/prod.pdf" style="color: blue; font-size: 12px;">Sem 5 & Sem 6</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/T.E/prod_sem6.pdf" style="color: blue; font-size: 12px;">Sem 6</a>
					</td>
				</tr>
				
			</table>
		</div>
</div>

<<div style="background-color:white; color:black; padding:20px;margin-left:665px;margin-top:-958px; width:608px; height: 900px;">
	<p ><font size='6px' color='#2266FF'><b>FOURTH YEAR ENGINEERING<b></font></p>	
		<div class="CSSTableGenerator" style="width:600px;height:800px;">
			<table >
				<tr> 
					<td>
						COURSE
					</td>
					<td >
						REVISED 2012
					</td>
					<td>
						REVISED 2007
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Automobile Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/auto.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://mu.ac.in/Auto.Mobile%20engg.vii-viii%20rev..pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Medical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/biomed.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/biomed.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Bio-Technology Engineering</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://mu.ac.in/B.E.%20Bio-Tachnology.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Chemical Engineering</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/chemical.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Civil Engineering</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/civil.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Computer Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/comps.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/computer.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electrical Engineering</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/electrical.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Electronics Engineering</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/elex.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Elec & TelComm Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/extc.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/extc.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Instrumentation Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/instru.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/instr.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Information Technology</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/instr.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/it.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Mechanical Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/mech.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/mechanical.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Printing & Packaging Technology</b>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="#" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;">
						<b>Production Engineering</b>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/MU_R2012/prod.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
					<td>
						<a href="http://www.stupidsid.com/Syllabus/Engineering/B.E/prod.pdf" style="color: blue; font-size: 12px;">Sem 7 & Sem 8</a>
					</td>
				</tr>
				
			</table>
		</div>
</div>
	
<div id="footer">
Copyrights(TM) 2014 | Team Ozil 11
</div>
</div>
</body>
</html>