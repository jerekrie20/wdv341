<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
</head>

<body>
<h1>WDV101 Intro HTML and CSS</h1>
<h2>UNIT 3 Forms - Lesson 2 Server Side Processes</h2>

<h3>Form Name-Value Pairs</h3>
<?php

	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

	$firstName = $_POST['first_name'];
	echo "<h2> Dear $firstName</h2>";
	echo "<h4>Thank you for your interest in DMACC</h4>";
	$academicStanding = $_POST['academic_standing'];
	echo "<h4> We have you listed as an $academicStanding starting this fall</h4>";
	$selectedMajor = $_POST['programs'];
	echo "<h4> You have declared $selectedMajor as your major</h4>";
	$emailAddress = $_POST['student_email'];
	echo "<h4>Based upon your responses we will provide the following information in our confirmation email to you at $emailAddress.</h4>";
	$contactMe = $_POST['contact_me'];
	$contactAdvisor =$_POST['contact_advisor'];
	echo "<h2>Contact Preferences</h2>";
	echo "<h4>$contactMe</h4>";
	echo "<h4>$contactAdvisor</h4>";

	$studentComments = $_POST['comments'];
	echo "<h4>You have shared the following comments which we will review: </h4>";
	echo "<h5>$studentComments</h5>";

?>

</body>
</html>
