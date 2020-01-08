<!DOCTYPE html>
<html>
<head>
	<title>Syncronous Replication</title>
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

<h1>SYNCRONOUS REPLICATION</h1>


<fieldset>
<form action="insert.php" method="post">
		<h1><legend>Customer:</legend><br></h1>
		Full Name:<br>
		<input type="text" name="cname" required><br><br>
		User Name:<br>
		<input type="text" name="cuser" required><br><br>
		Address:<br>
		<input type="text" name="caddr" required><br><br>
		Phone:<br>
		<input type="number" name="cphone" required><br><br>
		Password:<br>
		<input type="Password" name="cpassword" required><br><br>
		<br>
		<input type="submit" name="cinsert" value="Insert"><br><br>
</form>

<div style='margin-left:220px;margin-top:-392px;'>
<form action="insert.php" method="post">
		<h1><legend>Emoployees:</legend><br></h1>
		Full Name:<br>
		<input type="text" name="ename" required><br><br>
		Salary:<br>
		<input type="number" name="esalary"  required><br><br>
		Phone:<br>
		<input type="number" name="ephone" required><br><br>
		<br>
		<input type="submit" name="einsert" value="Insert"><br><br>
</form>
</div>

<div style='margin-left:440px;margin-top:-342px;'>
<form action="insert.php" method="post">
		<h1><legend>Product:</legend><br></h1>
		Product Name:<br>
		<input type="text" name="pname" required><br><br>
		Brand:<br>
		<input type="text" name="pbrand" required><br><br>
		Price:<br>
		<input type="number" name="pprice" required><br><br>
		<br>
		<input type="submit" name="pinsert" value="Insert"><br><br>
</form>
</div>
<br><br><h1>UPDATE</h1>

<form action="update.php" method="post">
		<h1><legend>Customer:</legend><br></h1>
		Full Name:<br>
		<input type="text" name="cname" required><br><br>
		User Name:<br>
		<input type="text" name="cuser" required><br><br>
		Address:<br>
		<input type="text" name="caddr" required><br><br>
		Phone:<br>
		<input type="number" name="cphone" required><br><br>
		Password:<br>
		<input type="Password" name="cpassword" required><br><br>
		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="cupdate" value="Update"><br><br>
</form>

<div style='margin-left:220px;margin-top:-502px;'>	    
<form action="update.php" method="post">

		<h1><legend>Emoployees:</legend><br></h1>
		Full Name:<br>
		<input type="text" name="ename" required><br><br>
		Salary:<br>
		<input type="number" name="esalary"  required><br><br>
		Phone:<br>
		<input type="number" name="ephone" required><br><br>
		<br>
		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="eupdate" value="Update"><br><br>
</form>
</div>

<div style='margin-left:440px;margin-top:-412px;'>
<form action="update.php" method="post">
		<h1><legend>Product:</legend><br></h1>
		Product Name:<br>
		<input type="text" name="pname" required><br><br>
		Brand:<br>
		<input type="text" name="pbrand" required><br><br>
		Price:<br>
		<input type="number" name="pprice" required><br><br>
		<br>
		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="pupdate" value="Update"><br><br>
</form>
</div>

<br><br><br><br>
<h1>DELETE</h1>


<form action="delete.php" method="post">
		<h1><legend>Customer:</legend><br></h1>

		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="cdelete" value="DELETE"><br><br>
</form>
</div>

<div style='margin-left:220px;margin-top:-232px;'>
<form action="delete.php" method="post">
		<h1><legend>Emoployees:</legend><br></h1>

		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="edelete" value="DELETE"><br><br>
</form>
</div>

<div style='margin-left:440px;margin-top:-232px;'>
<form action="delete.php" method="post">
		<h1><legend>Product:</legend><br></h1>

		WHERE ID:<br>
		<input type="number" name="id" required><br><br>
		<br>
		<input type="submit" name="pdelete" value="DELETE"><br><br>
</form>
</div>


	</fieldset>
</form>

</body>
</html>