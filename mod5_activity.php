<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Libre+Franklin|Lobster');
	body {
		background:#ececec;
		font-family: 'Libre Franklin', sans-serif;
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
		width:100px;height:20px;
	}	
	h1 {
		font-size:50px;
		font-family: 'Lobster', cursive;
		color:#339dc0;
	}
</style>
</head>

<body>
<div class="container">
<h1>Create a table</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Enter number of rows: <input type="text" name="row">  
	<br /><br />
	Enter number of columns: <input type="text" name="col">  
	<br /><br />
	<input type="submit" name="submit" value="Submit">  
</form>

<br /><br />


<?php
	$row = $_POST['row']; 
	$col = $_POST['col']; 

	if($_POST["submit"])
	{
		echo "<table>";
		
		for($i = 0; $i < $row ; $i++) {
			//create table row
			echo "<tr>";
			
			for($n = 0; $n < $col ; $n++) {
				//create table column
				echo "<td></td>";
			}
			echo "<tr>";
		}
		echo "</table>";
	}
	
?>

</div>

</body>
</html>