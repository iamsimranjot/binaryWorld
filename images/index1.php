
<?php
require 'function.php'; //to include all functions and variables of this page 
$conn=connect($config); // to establish the connection string 
if(!$conn){die('could not connect');}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.container{ width:600px;margin:auto;}
		form li{list-style: none;}
		form input[type="text"]{width:100%;margin-bottom: 1.5em}
		form textarea{width:100%;margin-bottom: 1.5em}
		label{display: block;}
	</style>
</head>
<body text=ivory background="PicsArt_1370853579233.jpg">

<div class="container">
<form action="result.php" method="post">
	<ul>
		<li>
			<label for="Name">Name:</label>
			<input type="text" name="Name" id="Name">
		</li>
		<li>
			<label for="DOB">DOB:</label>
			<textarea name="DOB" id="DOB"></textarea>
		</li>
		<li>
			<label for="Email">Email:</label>
			<textarea name="Email" id="Email"></textarea>
		</li>
                 
		<li>
			<input type="submit" value="Submit" name="Submit">
			

		</li>
	</ul>
	</form>
</div>

</body>
</html>