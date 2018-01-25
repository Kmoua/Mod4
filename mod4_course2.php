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
<h1>If...Else statement with logical operators</h1>
<p>This uses a random number for calculation.</p>


<?php
	
	if($_POST["submit"])
	{
		$input = $_POST['input'];
		$number = $_POST['number'];
		
		if ($input == $number + 5 && !empty($input))
		{
			echo "<h2>Wooohoo! You did it!</h2>";
		}
		else{
			echo "<h2>Incorrect answer.</h2>";
		}
	}
	
	$number = rand(1,5); // set number to a random digit
	echo "<h2>".$number. " + 5 = X</h2>";
		
?>

<form method="post" action="">
	X = <input type="text" name="input">  <input type="submit" name="submit" value="Submit">  
	<input type="hidden" name="number" value="<?php echo $number ?>" />
</form>




	</div><!-- end container -->

</html>