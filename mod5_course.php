<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Oswald');
	body {
		background:#ececec;
		font-family: georgia, serif;
		font-size:16px;
		text-align: center;
	}
	.container {
		background:#ffffff;
		width:80%;
		border:1px solid #dddddd;
		margin: auto;
		margin-top:50px;
		padding:40px;
		min-height: 500px;
	}
	table { 
		border-spacing: 0; 
		border-collapse: collapse;
		margin: auto;
	}
	td { 
		border:1px solid #44abca; 
		padding:5px 20px;
	}	
	h1 {
		font-size:50px;
		font-family: 'Oswald', sans-serif;
		color:#339dc0;
	}

</style>
</head>

<body>

<div class="container">



<h1>Loops and Continue</h1>
	<p>This will output all outstanding balance that are above $10 for each customer.<br /> In an ideal situation, I would have a database populated with the customer's name and balance which would get pulled like below. </p>


<br /><br />
<!--<div class="car"></div>-->

<?php

	
	$person = array (
    'Jane'  => 2.50,
    'Bill' => 4.20,
	'Samantha' => 14.20,
    'Kyle' => 0.35,
	'Mike' => 34.32,
	'Joe' => 21.50,
	'Cassie' => 1.21,
	);

	echo '<table><tr><th>Name</th><th>Balance</th></tr>';
	foreach ($person as $key => $value){
		
		if ($value > 10){
			echo '<tr>';
			echo '<td>'.$key.'</td><td>$' . number_format($value,2). '</td>';
			echo '</tr>';
			continue;
		}
	}
	echo '</table>';
		

?>




</div>

</body>
</html>