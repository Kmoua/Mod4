<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>If Statements</title>
<style>
	body {
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		font-size:13px;
		margin-top:40px;
		color:#4e4d4b;
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
		padding:5px 10px;
		width:50%;
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
<h1>Using an If...Else statement</h1>
<p>This uses a random number for calculation. It will display two responses based on calculation.</p>
<?php

	/* -------------------------------------------------------*/
	
	$random = rand(1,3);
	
	echo "<p>Random number: ".$random."</p>";
	
	if ($random + 5 == 8){
		echo "<h2><strong>".$random."</strong> + 5 = 8 | Correct!</h2>";
	}
	else {
		echo "<h2><strong>".$random."</strong> + 5 = 8 | That answer is incorrect!</h2>";
	}
	
	/* -------------------------------------------------------*/
	
?>


	</div><!-- end container -->

</html>