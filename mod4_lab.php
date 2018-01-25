<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operators</title>
<style>
	body {
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		font-size:13px;
		/*background:#e7e5e2;*/
		color:#4e4d4b;
	}
	p {
		text-align: center;
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
	table {
		width:70%;
		margin:0 auto;
		border-collapse: collapse;
		background: #ffffff;
		
	}
	tr{
		border-bottom:1px solid #eeeeee;
	}
	td{
		border-bottom: 1px solid #dddddd;
		line-height:20px;
		padding:5px 10px;
		width:50%;
	}
	td:first-child {
		font-weight: bold;
		border-right: 1px solid #dddddd;
		
	}
	.operator {
		color:#3AA3C3;
	}
</style>

</head>

<body>
<h1>Operators</h1>
	
<?php
	$random = rand(10,13);
	$random2 = rand(10,13);
	echo "<p><strong>Random #1: ".$random."</strong><br />";
	echo "<strong>Random #2: ".$random2."</strong><br /></p>";

	echo "<hr />";

	
	
	
	echo "<table>";
	
	if ($random < 12 and $random > 10){
		echo "<tr><td>1. " . $random." < 12 <span class='operator'>and</span> " . $random." > 10</td><td>1. <strong>TRUE</strong></td></tr>";
	}
	else {
		echo "<tr><td>1. " . $random." < 12 <span class='operator'>and</span> " . $random." > 10</td><td>1. FALSE</td></tr>";
	}
	
	if ($random == 12 or $random2 == 10){
		echo "<tr><td>2. " . $random." == 12 <span class='operator'>or</span> " . $random2." == 10</td><td>2. <strong>TRUE:</strong> Numbers are either 12 or 10. </td></tr>";
	}
	else {
		echo "<tr><td>2. " . $random." == 12 <span class='operator'>or</span> " . $random2." == 10</td><td>2. FALSE: Neither numbers are 12 or 10.</td></tr>";
	}
	
	if ($random <= 12 xor $random2 <= 10) {
		echo "<tr><td>3. " . $random." <= 12 <span class='operator'>xor</span> " . $random2." <= 11</td><td>3. <strong>TRUE</strong></td></tr>";
	}
	else {
		echo "<tr><td>3. " . $random." <= 12 <span class='operator'>xor</span> " . $random2." <= 11</td><td>3. FALSE</td></tr>";
	}
	
	if ($random != 12 && $random2 != 10){
		echo "<tr><td>4. " . $random." != 12 <span class='operator'>&&</span> " . $random2." != 10</td><td>4. <strong>TRUE</strong></td></tr>";
	}
	else{
		echo "<tr><td>4. " . $random." != 12 <span class='operator'>&&</span> " . $random2." != 10</td><td>4. FALSE</td></tr>";
	}
	
	if ($random == 12 || $random2 == 10) {
		echo "<tr><td>5. " . $random." == 12 <span class='operator'>||</span> " . $random2." == 10</td><td>5. <strong>TRUE:</strong> Numbers are either 12 or 10.<br /></td></tr>";
	}
	else {
		echo "<tr><td>5. " . $random." == 12 <span class='operator'>||</span> " . $random2." == 10</td><td>5. FALSE: Neither numbers are 12 or 10.<br /></td></tr>";
	}
	
	if ($random !== $random2){
		echo "<tr><td>6. " . $random." <span class='operator'>!==</span> " . $random2."</td><td>6. <strong>TRUE:</strong> The first number does not equal the second number.</td></tr>";
	}
	else {
		echo "<tr><td>6. " . $random." <span class='operator'>!==</span> " . $random2."</td><td>6. FALSE: The first number equals the second number.</td></tr>";
	}

	echo "</table>";
?>


</html>