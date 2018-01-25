<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>If Statements</title>
<style>
	body {
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		font-size:13px;
		color:#4e4d4b;
		margin-top:40px;
	}
	p {
		text-align: center;
		font-size:16px;
	}
	hr{
		border:0px; border-top:1px dashed #e7e5e2;
	}
	h1{
		font-family:georgia;
		font-style: italic;
		color:#aca699;
		font-size:50px;
		text-align: center;
	}
	h2{
		text-align: center;
		font-size:25px;
	}
	.container {
		width:1000px;
		margin: 0 auto;
	}
	table {
	
		margin:0 auto;
		border-collapse: collapse;
		background: #ffffff;
		width: 100%;
	}
	tr{
		border-bottom:1px solid #eeeeee;
	}
	td{
		border-bottom: 1px solid #dddddd;
		border-top:1px solid #dddddd;
		line-height:20px;
		padding:15px 10px;
		width:50%;
		font-size:24px;
	}
	td:first-child {
		font-weight: bold;
		border-right: 1px solid #dddddd;
		text-align: right;
	}
	.operator {
		color:#3AA3C3;
	}
	form {
		text-align: center;
	}
</style>

</head>

<body>
<div class="container">
<h1>An If...Elseif...Else statement with logical operators</h1>
<p>This uses a random number to generate test scores within a specified range.</p>

	
<?php
	$score = rand(30,100);

	
	echo "<table>";
	
	if ($score < 50 && $score >= 0){
		echo "<tr><td><strong>Your score:  ".$score."</td><td>FAILED!</td></tr>";
	}
	elseif ($score < 60 && $score >= 50){
		echo "<tr><td><strong>Your score:  ".$score."</td><td>Go back and study.</td></tr>";
	}
	elseif ($score < 70 && $score >= 60){
		echo "<tr><td><strong>Your score:  ".$score."</td><td>You're falling behind.</td></tr>";
	}
	elseif ($score < 80 && $score >= 70){
		echo "<tr><td><strong>Your score:  ".$score."</td><td>Nicely done.</td></tr>";
	}
	elseif ($score < 90 && $score >= 80){
		echo "<tr><td><strong>Your score:  ".$score."</td><td>Great job!</td></tr>";
	}
	else {
		echo "<tr><td><strong>Your score:  ".$score."</td><td>Excellent work!!</td></tr>";
	}

	echo "</table>";

?>


	</div><!-- end container -->

</html>
