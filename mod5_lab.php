<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mod 5 Lab</title>
<style>
	body{
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		margin-top:40px;
	}
	.container {
		width:80%;
		margin: auto;
		padding:40px;
		text-align: center;
	}	
	hr {
		border:0px;
		border-top:1px dotted #A09231;
		margin:30px 0;
	}
	h1 {
		color:#7ead5c;
	}
	.display{
		background:#eeeeee;
		padding:20px;
	}
</style>
</head>

<body>
<div class="container">
<h1>Choose a tool to unlock the chest: </h1>
<p>
	1. Pen <br />
	2. Keyboard <br />
	3. iPhone <br />
	4. Scissor
</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Pick a tool: <input type="text" name="input">  
	<input type="submit" name="submit" value="Submit"> <br /> 
	
	
</form>

<hr>

<?php
	$guess = $_POST['input'];
	$tryMessage = "";
	$ruby = 100;
	
	if(isset($_POST['submit'])) {
		
		if ($guess == 1) {
			$tryMessage = "This is doing anything. Try again.";
		
		}
		else if ($guess == 2) {
			$tryMessage = "Why would you use this??";
			
		}
		else if ($guess == 3){
			$tryMessage = "";

		}
		else if ($guess == 4) {
			$tryMessage = "That looks dangerous.";
		}
		
		else {
			$tryMessage = "That character is not valid.";

		}
		
		while ($guess == 3) {
			echo '<div class="display">';
			echo "<h2>You unlocked the chest!</h2>";
			echo "<p>You have " . $ruby." rubies!</p>";
			echo '</div>';
			$guess++;
		}

	}    
	
?>

<p><?php echo $tryMessage ?></p>
</div>

</body>
</html>