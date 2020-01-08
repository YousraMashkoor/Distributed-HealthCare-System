<!DOCTYPE html>
<html>
<head>
	<title>Welcome| DB Distribution</title>
</head>
<body>

<?php

session_start();

	if($_SESSION['db']=='cartme')
		echo "<h1> WELCOME TO HQ</h1>";
	elseif($_SESSION['db']=='site1')
		echo "<h1> WELCOME TO SITE1</h1>";
	elseif($_SESSION['db']=='site2')
		echo "<h1> WELCOME TO SITE2</h1>";
?>

<h1>DISTRIBUTED SYSTEM</h1>
<h1>REPLICATION</h1>
<h3>Choose Your Option:</h3>

<form action="form.php" method="post">
	<input type="submit" name="syncronous" value="SYNCRONOUS">
</form>

<div style='margin-left:150px;margin-top:-20px;'>
<form action="async_form.php" method="post">
	<input type="submit" name="asyncronous" value="ASYNCRONOUS">
</form>

</body>
</html>